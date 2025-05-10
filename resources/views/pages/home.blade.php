<x-layout>
    <x-slot:title>
        Strona główna
    </x-slot>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="input-group">
                        <div class="form-outline" data-mdb-input-init>
                            <input type="search" id="form1" class="form-control" />
                            <label class="form-label" for="form1">Szukaj</label>
                        </div>
                        <button type="button" class="btn btn-primary" data-mdb-ripple-init>
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Osoby zmarłe</h4>
                    <div>
                        @foreach ($personDied as $p)
                            {{ $p->nazwisko }} <br />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>