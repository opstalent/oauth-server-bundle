## Installation

Add this to service.yml

```yml
services:
    app.oauth.storage:
        class: Opstalent\OAuthServerBundle\Storage\OAuthStorage
        parent: fos_oauth_server.storage.default
    app.oauth.server:
        class: Opstalent\OAuthServerBundle\OAuth\OAuth2
        arguments: ['@app.oauth.storage', '%fos_oauth_server.server.options%']
    fos_oauth_server.controller.token:
        class: Opstalent\OAuthServerBundle\Controller\TokenController
        arguments: ['@app.oauth.server']
```
