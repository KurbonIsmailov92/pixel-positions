<x-layout class="ps-20">
    <x-page-heading>New Job</x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="Web Developer..."/>
        <x-forms.input label="Salary" name="salary" placeholder="$15 000"/>
        <x-forms.input label="Location" name="location" placeholder="Dushanbe"/>
        <x-forms.select label="Schedule" name="schedule">
            <option>Part time</option>
            <option>Full time</option>
        </x-forms.select>
        <x-forms.input label="URL" name="url" placeholder="www.microsoft.com"/>
        <x-forms.checkbox label="Feature (Costs Extra)" name="feature"/>
        <x-forms.divider/>
        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laracast, video, director"/>
        <div class="space-x-6">
            <a href="/" class="text hover:text-red-500 transition-colors duration-300">Cancel</a>
            <x-forms.button>Publish</x-forms.button>
        </div>
    </x-forms.form>
</x-layout>
