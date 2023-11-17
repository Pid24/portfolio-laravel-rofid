<form action="{{ route('profils.update', $id->id) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="nom" class="form-label">Name:</label>
        <input type="string" name="nom" value="{{ $id->nom }}" class="form-control" id="nom">

    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">Country:</label>
        <input type="string" name="prenom" value="{{ $id->prenom }}" class="form-control" id="prenom">
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age:</label>
        <input type="number" name="age" value="{{ $id->age }}" class="form-control" id="age">
    </div>
    <div class="mb-3">
        <label for="titre" class="form-label">Profile:</label>
        <input type="string" name="titre" value="{{ $id->titre }}" class="form-control" id="titre">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" name="email" value="{{ $id->email }}" class="form-control" id="email">
    </div>

    <div class="mb-3">
        <label for="telephone" class="form-label">Telephone:</label>
        <input type="number" name="telephone" value="{{ $id->telephone }}" class="form-control" id="telephone">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
