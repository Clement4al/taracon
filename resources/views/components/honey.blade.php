<div style="display: none">
    <input name="honey[blank]" />

    <input name="honey[from]" value="{{ encrypt(now()->addSeconds(3)) }}" />

    <input
        x-data x-init="setTimeout(() => $el.value || ($el.value = '{{ encrypt('valid') }}'), 3000)"
        name="honey[js]"
    />
</div>
