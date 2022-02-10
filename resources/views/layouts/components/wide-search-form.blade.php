<form action="{{ route('search') }}">
    <div class="row d-flex mt-5 justify-content-center">
        <div class="col-md-7">
            <span class="input-container">
                <div class="input-group mb-3">
                    <input type="hidden" name="scope" value="blockchain">
                    <input type="text" class="form-control custom-form-control" placeholder="Search Tokens" aria-label="Search" aria-describedby="basic-addon2" name="q" />
                    <div class="input-group-append">
                        <button class="input-group-text custom-input" id="basic-addon2"><i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </span>

        </div>
    </div>
</form>