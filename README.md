## Installation

Add this to service.yml

```yml
services:
    app.oauth.storage:
        class: Opstalent\OAuthServerBundle\Storage\OAuthStorage
        parent: fos_oauth_server.storage.default
    custom_auth.server:
        class: AppBundle\Auth\CustomOAuth2
        arguments: ['@app.oauth.storage', '%fos_oauth_server.server.options%']
    fos_oauth_server.controller.token:
        class: Opstalent\OAuthServerBundle\Controller\TokenController
        arguments: ['@custom_auth.server']
```
