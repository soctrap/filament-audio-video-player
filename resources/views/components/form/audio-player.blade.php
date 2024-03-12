<x-dynamic-component wire:ignore
    x-data="plyr"
    :component="$getFieldWrapperView()"
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-action="$getHintAction()"
    :hint-color="$getHintColor()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()">

    <audio style="{{ $getCssAsString() }}"
        data-plyr-config='{
            {{ $getConfigAsString() }}
        }'
        class="js-plyr"
        controls>
        <source src="{{ $getState() }}"
            type="audio/mp3" />
    </audio>
</x-dynamic-component>
