Shared Events for Laravel Packages
=============

This repository contains shared events used in our Laravel packages:

- [SSOfy Laravel (Server) Package](https://github.com/ssofy/laravel-server) as the **sender**.
- [SSOfy Laravel (Client) Package](https://github.com/ssofy/laravel) as the **receiver**.

### Reason for a standalone repository

This standalone repository for events was created to promote clear separation of concerns and enhance reusability, 
not only within our packages but also for other developers who may want to receive these events in their own Laravel projects.

## Usage

Include as a dependency in your `composer.json` file:

```json
{
    "require": {
        "ssofy/laravel-events": "1.0.0"
    }
}
```

## Support

Feel free to reach support with any questions regarding the integration or reporting issues.
Our technical experts are available around the clock to conduct investigations and provide
the highest quality product and service support as quickly as possible.

## Author

**SSOfy** and derivatives are by [Cubelet Ltd](https://cubelet.co.uk).

## License

The MIT License (MIT). Please see [License](LICENSE) File for more information.
