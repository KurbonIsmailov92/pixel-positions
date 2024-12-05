<x-layout>
    <x-page-heading>Log In</x-page-heading>
    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email" type="email" placeholder="example@mail.com"/>
        <x-forms.input label="Password" name="password" type="password"/>
        <x-forms.divider/>
        <x-forms.button class=" hover:bg-blue-900 transition-colors duration-300 border border-transparent hover:border-blue-300">Log In</x-forms.button>

    </x-forms.form>
</x-layout>
