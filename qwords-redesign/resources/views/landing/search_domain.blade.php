<div class="bg-primary py-5">
    <div class="box-info text-white">
        <h3>Cari Nama Domainmu</h3>
        <p>Nama Domain digunakan untuk mempermudah pengunjung menuju ke situs Anda. Pilih nama domain yang paling mencerminkan bisnis, produk, atau layanan Anda.</p>
        
        <div class="d-inline-block">
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Cari nama domain Anda">

            <select class="form-select" aria-label="Default select example">
                <option selected>.id</option>
                <option value="1">.com</option>
                <option value="2">.info</option>
            </select>

            <button class="btn btn-dark" style="padding: var(--spaceXMD) var(--spaceJumbo)">Cari</button>
        </div>

        @include('components.breakline', ['total' => 1])
        <div class="row">
            <div class="col">
                <p class="mb-0">.com</p>
                <h3>Rp 165.000</h3>
            </div>
            <div class="col">
                <p class="mb-0">.id</p>
                <h3>Rp 225.000</h3>
            </div>
            <div class="col">
                <p class="mb-0">.info</p>
                <h3>Rp 77.000</h3>
            </div>
        </div>
    </div>
</div>