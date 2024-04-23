function confirmDelete(taskId) {
    if (confirm('Are you sure you want to delete this task?')) {
        window.location.href = '/delete/' + taskId;
    } else {
        // Do nothing and redirect to the view page
    }
}