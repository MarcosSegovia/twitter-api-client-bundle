# twitter-api-client-bundle

A Symfony Bundle for [php-twitter-api-client](https://github.com/MarcosSegovia/php-twitter-api-client)

##How to install?

```json
    "require": {
        //...
        "marcossegovia/twitter-api-client-bundle": "dev-master",
        "marcossegovia/php-twitter-api-client": "@dev"
    }
```

##How to use it?

First of all include the Bundle into your `AppKernel.php`
```php

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            /...
            new MarcosSegovia\TwitterApiClientBundle\TwitterApiClientBundle()

```

And provide into your config.yml your [Twitter API_KEY and API_SECRET](https://apps.twitter.com/) like the following example:

```yaml
twitter_api_client:
    twitter:
        api_key: your_raw_api_key
        api_secret: your_raw_api_secret
```
