@props([
    'options',
    'name',
    'id' => null,
    'label' => '',
    'icon' => '',
    'selected' => null,
    'required' => true,
    'multiple' => false,
    'maxItems' => null,
    'selectjs' => false,
])

<div class="form-group">
    @if($label)
        <label class="form-control-label" for="{{ $id ?? $name }}">
            @if($icon)
                <i class="{{ $icon }}"></i>
            @endif
            {{ $label }}
        </label>
    @endif
    <select name="{{ $name }}" id="{{ $id ?? $name }}" class="form-control form-control-alternative" {{ $required ? 'required' : '' }} {{ $multiple ? 'multiple' : '' }}>
        <option value="" disabled {{ is_null($selected) ? 'selected' : '' }}>Seleccionar una opción</option>
        @foreach ($options as $optionId => $optionName)
            <option value="{{ $optionId }}" @selected(in_array($optionId, (array) old($name, (array) $selected)))>
                {{ $optionName }}
            </option>
        @endforeach
    </select>
</div>

@if($selectjs || $multiple || $maxItems)
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const selectElement = document.getElementById('{{ $id ?? $name }}');
            const choices = new Choices(selectElement, {
                searchEnabled: {{ $selectjs ? 'true' : 'false' }},
                itemSelectText: '',
                shouldSort: false,
                maxItemCount: {{ $maxItems ?? 'Infinity' }}
            });

            @if($multiple && $maxItems)
            selectElement.addEventListener('change', function () {
                if (selectElement.selectedOptions.length > {{ $maxItems }}) {
                    alert('Sólo puedes seleccionar un máximo de {{ $maxItems }} opciones.');
                    // Remover la opción seleccionada
                    selectElement.options[selectElement.selectedIndex].selected = false;
                }
            });
            @endif
        });
    </script>
@endif
