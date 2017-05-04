Add this to service.yml

````
custom_auth.storage:
        class: AppBundle\Auth\CustomOAuthStorage
        arguments: ['@fos_oauth_server.client_manager.default', '@fos_oauth_server.access_token_manager.default', '@fos_oauth_server.refresh_token_manager.default', '@fos_oauth_server.auth_code_manager.default', '@?fos_user.user_provider.username_email', '@security.encoder_factory']
    custom_auth.server:
        class: AppBundle\Auth\CustomOAuth2
        arguments: ['@custom_auth.storage', '%fos_oauth_server.server.options%']
    fos_oauth_server.controller.token:
        class: OAuthServerBundle\Controller\TokenController
        arguments: ['@custom_auth.server']

````