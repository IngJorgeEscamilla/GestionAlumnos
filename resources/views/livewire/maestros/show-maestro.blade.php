<div class="card bg-base-100 w-96 shadow-xl">
    <figure class="px-10 pt-10">
      <img
        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
        alt="Shoes"
        class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Ficha del maestro</h2>
      <p>Nombre del maestro: {{ $maestro ->nombre }} {{ $maestro ->apellido }}</p>
      <p>Matricula del maestro: {{ $maestro ->matricula }}</p>
      <p>Correo Electrónico: {{ $maestro ->email }}</p>
      <p>Telefóno del maestro: {{ $maestro ->telefono }}</p>
      <div class="card-actions">
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>