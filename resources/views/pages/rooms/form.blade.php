<form action="{{ $action }}" method="post">
    @method("POST")
    @csrf

    <div class="medium-4  columns">
        <label for="number">Number</label>
        <input id="number" name="number" maxlength="4" type="text" value="{{ old('number', optional($room)->number) }}">
        @error('number')
            <span class="form-error is-visible">{{ $message }}</span>
        @enderror
    </div>
    <div class="medium-4  columns">
        <label for="name">Name</label>
        <input id="name" name="name" maxlength="100" type="text" value="{{ old('name', optional($room)->name) }}">
        @error('name')
            <span class="form-error is-visible">{{ $message }}</span>
        @enderror
    </div>
    <div class="medium-12  columns">
        <input value="{{ $label }}" class="button success hollow" type="submit">
    </div>
</form>
