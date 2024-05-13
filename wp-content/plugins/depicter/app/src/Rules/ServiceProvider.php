<?php

namespace Depicter\Rules;

use Depicter\Rules\Condition\Conditions;
use WPEmerge\ServiceProviders\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{

    /**
	 * {@inheritDoc}
	 */
	public function register( $container ) {
		$app = $container[ WPEMERGE_APPLICATION_KEY ];

		// register conditions manager
		$container[ 'depicter.displayRules.conditions' ] = function () {
			return new Conditions();
		};

		$app->alias( 'conditions', 'depicter.displayRules.conditions' );
    }

    /**
	 * {@inheritDoc}
	 */
    public function bootstrap($container)
    {
		add_action( 'wp_head', function(){
			$documentIDs = \Depicter::document()->getConditionalDocumentIDs();

			foreach( $documentIDs as $documentID ) {
				if ( !empty( $_GET['dp-disable-popups'] ) ) {
					try{
						if (\Depicter::documentRepository()->findOne( $documentID )->getProperty('type') == 'popup' ) {
							continue;
						}
					}catch( \Exception $e ){
					}
				}

				if ( \Depicter::document()->displayRules( $documentID )->displayConditions()->areMet() ) {
					\Depicter::front()->assets()->enqueueStyles();
					\Depicter::front()->assets()->enqueueScripts();

					\Depicter::document()->cacheCustomStyles( $documentID );
					\Depicter::front()->assets()->enqueueCustomAssets( $documentID );
					\Depicter::front()->assets()->enqueuePreloadTags( $documentID );

					add_action( 'wp_footer', function() use ( $documentID ) {
						echo \Depicter::front()->render()->document( $documentID );
					});
				}
			}
		});
    }
}
