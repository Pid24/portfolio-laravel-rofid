<form action="{{ route('profils.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label for="nom" class="form-label">Name</label>
        <input type="string" value="{{ old('nom') }}" name="nom" class="form-control" id="nom">

    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">Country</label>
        <input type="string" value="{{ old('prenom') }}" name="prenom" class="form-control" id="prenom">
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" value="{{ old('age') }}" name="age" class="form-control" id="age">
    </div>
    <div class="mb-3">
        <label for="titre" class="form-label">Profile</label>
        <input type="string" value="{{ old('titre') }}" name="titre" class="form-control" id="titre">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="email">
    </div>

    <div class="mb-3">
        <label for="telephone" class="form-label">Telephone</label>
        <input type="number" value="{{ old('telephone') }}" name="telephone" class="form-control" id="telephone">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
