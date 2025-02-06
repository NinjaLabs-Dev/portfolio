@extends('layouts.main')
@section('noNavbar', true)
@section('title', 'Terms of Sale')

@section('content')
    <div class="flex flex-col gap-5 items-center justify-center my-12">
        <h1 class="text-5xl underline">Terms of Sale</h1>
        <h3 class="text-md opacity-50">Last Updated: 06/02/2025</h3>

        <div class="flex flex-col gap-2 max-w-6xl p-8 border-4 border-opacity-10 border-white">
            <h2 class="font-bold text-2xl">1. Introduction</h2>
            <p class="text-md">
                These Terms of Sale ("Terms") govern the purchase and use of products and services provided through, but not limited to, our Tebex and Stripe store. By completing a purchase, you agree to these Terms in full.
            </p>

            <h2 class="font-bold text-2xl">2. Fair Use Support Policy</h2>
            <p class="text-md">
                The NinjaLabs team provides customer support based on a fair use policy. Our team will ensure that products function as advertised and will address issues accordingly. However, support is offered within reasonable limits. We reserve the right to discontinue or refuse support if requests exceed the scope of this fair use policy, including but not limited to excessive, repetitive, or unreasonable demands.
            </p>

            <h2 class="font-bold text-2xl">3. Responsibility of Payment</h2>
            <p class="text-md">
                The individual or business named on the invoice is solely responsible for making payments for purchased products or services. It is not our responsibility to contact third parties for payment or resolve disputes related to payment obligations. Failure to complete payment may result in order cancellation or restrictions on future purchases.
            </p>

            <h2 class="font-bold text-2xl">4. Refund Policy</h2>
            <p class="text-md">
                All sales are final unless otherwise stated. Refunds will only be issued at our discretion in cases where a product is found to be defective and cannot be reasonably fixed.
            </p>

            <h2 class="font-bold text-2xl">5. Chargebacks and Payment Disputes</h2>
            <p class="text-md">
                Any chargeback or payment dispute filed without first seeking support will result in an immediate ban from our services. We reserve the right to challenge fraudulent chargebacks with evidence of service fulfillment.
            </p>

            <h2 class="font-bold text-2xl">6. Modifications to Terms</h2>
            <p class="text-md">
                We reserve the right to modify these Terms at any time. It is your responsibility to review them periodically for updates.
            </p>

            <h2 class="font-bold text-2xl">7. Contact Information</h2>
            <p class="text-md">
                For any inquiries or support, please contact us through our official support channels or email us at <a href="mailto:business@ninjalabs.dev" class="underline">business@ninjalabs.dev</a>.
            </p>
        </div>
    </div>
@endsection
