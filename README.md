# Laravel Lokalise CLI

This package contains the standalone [Laravel Lokalise](https://github.com/bambamboole/laravel-lokalise) CLI.

## Usage

The Laravel Lokalise CLI can be downloaded via this bash one-liner. It first fetches the latest release information to
extract the download URL for the `llc.phar`. This is then downloaded.

```bash
curl -s https://api.github.com/repos/bambamboole/laravel-lokalise-cli/releases/latest | grep "browser_download_url.*llc.phar" | cut -d '"' -f 4 | xargs curl -L -o llc.phar
```

## Configuration

To configure the CLI, you need to set the following environment variables:

- `LOKALISE_API_TOKEN`: Your Lokalise API token.
- `LOKALISE_PROJECT_ID`: The ID of your Lokalise project.

You can set these variables in your shell profile (e.g., `.bashrc`, `.zshrc`) or export them directly in your terminal
session:

```bash
export LOKALISE_API_TOKEN=your_api_token
export LOKALISE_PROJECT_ID=your_project_id
```

Alternatively, you can create a `.env` file next to the `llc.phar` and add the variables there:

```dotenv
LOKALISE_API_TOKEN=your_api_token
LOKALISE_PROJECT_ID=your_project_id
```


**Happy Translating!**

## Contributing

### Ideas/Roadmap
* Add more tests
* Your idea here

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email manuel@christlieb.eu instead of using the issue tracker.

## Credits

-   [Manuel Christlieb](https://github.com/bambamboole)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

