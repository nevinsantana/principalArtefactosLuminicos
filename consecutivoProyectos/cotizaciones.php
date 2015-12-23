<section class="sectionContainer">
  <section class="filterArea">
    <section class="inputFilterContainer">
      <input id="searchInput" placeholder="Buscar en cualquier campo">
    </section>
  </section>
  <div class="tableContainer">
    <table class="tablaCotizaciones">
      <thead>
        <tr>
          <th>No</th>
          <th>Fecha</th>
          <th>Cliente</th>
          <th>Vendedor</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody id="fbody">
        <?php generaTablaCotizaciones(); // php/funciones.php ?>
      </tbody>
    </table>
  </div>
</section>
