<x-layout>
    <x-page-heading>New job</x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" />
        <x-forms.input label="Salary" name="salary"/>
        <x-forms.input label="Location" name="location" />
        <x-forms.select label="Schedule" name="schedule">
            <option value="full-time">Full-time</option>
            <option value="part-time">Part-time</option>
        </x-forms.select>
        <x-forms.input label="URL" name="url" />
        <x-forms.checkbox label="Feature(Costs extra)" name="featured"/>
        <x-forms.divider/>
        <x-forms.input label="Tags(comma separated)" name="tags" />
        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
