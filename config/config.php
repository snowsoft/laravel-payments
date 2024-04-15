<?php

declare(strict_types=1);

return [
    'main_subscription_tag' => 'main',
    'fallback_plan_tag' => null,
    // Database Tables
    'tables' => [
        'plans' => 'plans',
        'plan_combinations' => 'plan_combinations',
        'plan_features' => 'plan_features',
        'plan_subscriptions' => 'plan_subscriptions',
        'plan_subscription_features' => 'plan_subscription_features',
        'plan_subscription_schedules' => 'plan_subscription_schedules',
        'plan_subscription_usage' => 'plan_subscription_usage',
    ],

    // Models
    'models' => [
        'plan' => \Snow\Payments\Models\Plan::class,
        'plan_combination' => \Snow\Payments\Models\PlanCombination::class,
        'plan_feature' => \Snow\Payments\Models\PlanFeature::class,
        'plan_subscription' => \Snow\Payments\Models\PlanSubscription::class,
        'plan_subscription_feature' => \Snow\Payments\Models\PlanSubscriptionFeature::class,
        'plan_subscription_schedule' => \Snow\Payments\Models\PlanSubscriptionSchedule::class,
        'plan_subscription_usage' => \Snow\Payments\Models\PlanSubscriptionUsage::class,
    ],

    'services' => [
        'payment_methods' => [
            'free' => \Snow\Payments\Services\PaymentMethods\Free::class
        ]
    ]
];
