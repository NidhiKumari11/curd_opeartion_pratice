

<div class="container mt-4" >
    <h3> Add a Note to iNotes </h3>
    <form method="POST"  action="save.php"  >
        <div class="mb-3">
            <label for="title" class="form-label">Note Title</label>
            <input type="title" class="form-control" id="title" name="title" aria-describedby="emailHelp">
        
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Note Description </label>
            <textarea type="text"  name="desc" class="form-control" id="desc" rows="5" cols="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Note</button>
    </form>
</div>