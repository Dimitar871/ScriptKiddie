@component('mail::message')
# Password Reset Request

You are receiving this email because we received a password reset request for your account.

@component('mail::button', ['url' => $actionUrl])
Reset Password
@endcomponent

This link will expire in {{ config('auth.passwords.users.expire') }} minutes.

If you didn't request this, no further action is needed.
@endcomponent