<section class="sectionContainer">
  <div class="backVerCotizacion">
    <section class="formCotizacionContent">
      <output class="colFormCotizacion">
        <article class="datosCotizacion">
          <?php generaDatosCotizacion(); ?>
        </article>
        <article class="datosVenClien">
          <?php generaDatosVenClien(); ?>
        </article>
      </output>
      <output class="colFormCotizacion partidasCotizacion">
        <table>
          <thead>
            <tr>
              <th>Partida</th>
              <th>Cantidad</th>
              <th>Catálogo</th>
            </tr>
          </thead>
          <tbody id="fbody">
            <?php generaTablaPartidas(); ?>
          </tbody>
        </table>
      </output>
    </section>
  </div>
</section>
