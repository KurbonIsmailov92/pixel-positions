<x-layout>
    <x-page-heading>Register</x-page-heading>
    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Name" name="name"/>
        <x-forms.input label="Email" name="email" type="email" placeholder="example@mail.com"/>
        <x-forms.input label="Password" name="password" type="password"/>
        <x-forms.input label="Password Confirmation" name="password_confirmation" type="password"/>

        <x-forms.divider/>

        <x-forms.input label="Employer Name" name="employer" />
        <x-forms.input label="Employer Logo" name="logo" type="file"/>

        <x-forms.button class=" hover:bg-blue-900 transition-colors duration-300 border border-transparent hover:border-blue-300">Create Account</x-forms.button>

    </x-forms.form>
</x-layout>
