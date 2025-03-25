<div class="mt-5">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif




    <div style="width: 50%; margin-left: 25%; margin-bottom: 25px" class="card">
        <h5 style="text-align: center" class="card-header">Cadastro de Produto</h5>

        <div class="card-body">

            <form wire:submit.prevent="store">



                <div class="mb-3">
                    <label for="email" class="form-label">Nome</label>
                    <input type="text"
                        style="border-radius: 100px; border-inline-color: black; border-block-color: black"
                        class="form-control" id="nome" name="nome" placeholder="Ex.: X-Tudão"
                        wire:model.defer="nome">
                </div>

                <div class="mb-3">
                    <label for="cpf" class="form-label">ingredientes</label>
                    <input type="text"
                        style="border-radius: 100px; border-inline-color: black; border-block-color: black"
                        class="form-control" id="ingredientes" name="ingredientes" placeholder="Ex.: Pão, Cebola, Hamburger, alface, tomate"
                        wire:model.defer="ingredientes">
                </div>


                <div class="mb-3">
                    <label for="rm" class="form-label">valor</label>
                    <input type="integer"
                        style="border-radius: 100px; border-inline-color: black; border-block-color: black"
                        class="form-control" id="valor" name="valor" placeholder="Ex.: 16,50"
                        wire:model.defer="valor">
                </div>




                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Registrar Produto</button>
                </div>

                

                



            </form>

        </div>


    </div>





</div>
