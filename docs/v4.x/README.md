# Laravel Payments

**Laravel Payments** is a flexible plans and subscription management system for Laravel. Originally forked
from [bpuig/laravel-subby](https://github.com/bpuig/laravel-subby) and [rinvex/laravel-subscriptions](https://github.com/rinvex/laravel-subscriptions).

## What it does

The way this package is made:

1. There are [plans](models/plan-model.md) that have [features](models/plan-feature-model.md).
2. There is an entity (morph) receiving the
   trait `HasSubscriptions` ([subscriptions](models/plan-subscription-model.md)). It can be a user, a team, whatever you
   want; see [Attach Subscriptions to model](install/#attach-subscription).
3. This entity can have many subscriptions to one or more plans and use their features and other features not attached
   to a plan. The subscription is made as a "snapshot" of current plan details. If plan is modified in the future,
   subscriber's subscription stays as it was, price, invoicing and features are "frozen" unless manually synchronized
   with related plan.

## Extensions

- [Laravel Payments Schedule](https://github.com/snowsoft/laravel-payments-schedule): For scheduling your plan changes in the
  future.

## Considerations

- Payments and translations are out of scope for this package.
- You may want to extend some core models, in case you need to override the logic behind some helper methods
  like `renew()`, `cancel()` etc. E.g.: when cancelling a subscription you may want to also cancel the recurring payment
  attached.

## Changelog

Refer to the [Changelog](CHANGELOG.md) for a full history of the project.

## License

Forked originally from [bpuig/laravel-subby](https://github.com/bpuig/laravel-subby) and [rinvex/laravel-subscriptions](https://github.com/rinvex/laravel-subscriptions). Thank you for
creating the original!


This software is released under [The MIT License (MIT)](LICENSE.md).

&copy; 2020-2021 B. Puig, Some rights reserved.
