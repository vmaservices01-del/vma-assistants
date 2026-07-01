@extends('backend.layouts.app')

@section('content')
<div class="container mx-auto">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Form Submissions</h2>

    <!-- 1. BULK ACTION FORM: Placed outside the table -->
    <form id="bulkActionForm" method="POST" action="{{ route('backend.forms.destroyMultiple') }}">
        @csrf @method('DELETE')
    </form>

    <div class="flex justify-between items-center mb-4">
        <!-- The button links to the form using the 'form' attribute -->
        <button type="submit" form="bulkActionForm" id="deleteBtn" class="hidden bg-red-600 text-white px-4 py-2 rounded text-sm font-semibold hover:bg-red-700">
            Delete Selected
        </button>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="px-6 py-4"><input type="checkbox" id="selectAll"></th>
                    <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase">Form</th>
                    <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase">Data Preview</th>
                    <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase">Date</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach($submissions as $sub)
                <tr class="hover:bg-gray-50 transition">
                    <!-- Note: The checkboxes now use the 'form' attribute to link to the bulkActionForm -->
                    <td class="px-6 py-4">
                        <input type="checkbox" name="ids[]" value="{{ $sub->id }}" form="bulkActionForm" class="row-checkbox">
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900">{{ $sub->form_name }}</td>
                    <td class="px-6 py-4 text-sm text-gray-600">
                        <div class="font-medium text-gray-900">
                            {{ $sub->data['first_name'] ?? 'N/A' }} {{ $sub->data['last_name'] ?? '' }}
                        </div>
                        <div class="text-xs text-gray-400">
                            {{ $sub->data['email'] ?? '' }}
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">{{ $sub->created_at->format('M d, Y') }}</td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex items-center justify-end gap-3">
                            <a href="{{ route('backend.forms.show', $sub->id) }}" class="text-blue-600 hover:text-blue-900" title="View">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                            </a>

                            <!-- Individual Delete Form -->
                            <form action="{{ route('backend.forms.destroy', $sub->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700" title="Delete">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="mt-4">{{ $submissions->links() }}</div>
</div>

<script>
    const selectAll = document.getElementById('selectAll');
    const checkboxes = document.querySelectorAll('.row-checkbox');
    const deleteBtn = document.getElementById('deleteBtn');

    // 1. Toggle all checkboxes when clicking "Select All"
    selectAll.addEventListener('click', function(e) {
        checkboxes.forEach(cb => cb.checked = e.target.checked);
        toggleDeleteButton();
    });

    // 2. Watch individual checkboxes to show/hide the button
    checkboxes.forEach(cb => {
        cb.addEventListener('change', function() {
            toggleDeleteButton();
            // Optional: update "select all" if all items are manually checked
            selectAll.checked = document.querySelectorAll('.row-checkbox:checked').length === checkboxes.length;
        });
    });

    // 3. Logic to show/hide the delete button
    function toggleDeleteButton() {
        const hasChecked = document.querySelectorAll('.row-checkbox:checked').length > 0;
        deleteBtn.classList.toggle('hidden', !hasChecked);
    }
</script>
@endsection