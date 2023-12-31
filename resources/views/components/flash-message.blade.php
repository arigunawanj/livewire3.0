@if (flash()->message)
    <div class="alert alert-{{ flash()->class ?? 'info' }}" role="alert">
        @if (flash()->class == 'warning')
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
        @endif

        @if (flash()->class == 'success')
            <i class="bi bi-check-lg me-2"></i>
        @endif
        
        {{ flash()->message }}
    </div>
@endif
