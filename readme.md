## Laravel PHP Framework + Materialize CSS CRM

[![Build Status](https://travis-ci.org/vinayakkulkarni/crm.svg)](https://travis-ci.org/vinayakkulkarni/crm/)
[![StyleCI](https://styleci.io/repos/76187257/shield?style=flat)](https://styleci.io/repos/76187257)
[![Coverage Status](https://coveralls.io/repos/github/vinayakkulkarni/crm/badge.svg?branch=master)](https://coveralls.io/github/vinayakkulkarni/crm?branch=master)

## Installation instructions
### Clone the repo
- clone the repo `git clone https://github.com/vinayakkulkarni/crm.git` 
### Homestead + DB setup
- `composer install`
- `php vendor/bin/homestead make`
- add in `/etc/hosts/` secure.shoptreeplatform.app demo.shoptreeplatform.app
- `vagrant up`
- `php artisan key:generate`
- `php artisan migrate:install`
- `php artisan migrate`

### Gulp/elixir setup
- `npm install`
- `npm install gulp`
- `gulp materialize-build`
- `gulp`

## Contribution Guide
Clone this repo and create a new local branch from staging branch. Make changes and send pull request to `staging`. After PR is accepted you can delete your local branch.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
`
