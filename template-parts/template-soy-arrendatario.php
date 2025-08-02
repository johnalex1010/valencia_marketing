<?php /*Template Name: Página de Soy Arrendatario*/ ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['enviar_formulario'])) {
    if (!isset($_POST['form_nonce']) || !wp_verify_nonce($_POST['form_nonce'], 'enviar_formulario_custom')) {
        wp_die('Error de seguridad');
    }

    $nombre_completo  = sanitize_text_field($_POST['nombre_completo']);
    $correo_electronico  = sanitize_email($_POST['correo_electronico']);
    $numero_telefono     = sanitize_text_field($_POST['numero_telefono']);
    $numero_documento    = sanitize_text_field($_POST['numero_documento']);
    $tipo_solicitud      = sanitize_text_field($_POST['tipo_solicitud']);
    $medio_contacto      = sanitize_text_field($_POST['medio_contacto']);
    $mensaje             = sanitize_textarea_field($_POST['mensaje']);
    $politica_privacidad = sanitize_text_field($_POST['politica_privacidad']);
    $asunto  = "Soy Arrendatario - Solicitud de contacto - Página Web Inmobiliaria Profesional";


    // $asunto = "Nuevo mensaje de contacto de $nombre";
    $cuerpo = "
   <table
		style='width: 650px; margin: 0 auto; border:1px solid #ddd; border-radius: 5px; overflow: hidden; font-family: Arial, Helvetica, sans-serif; background-color: #F9FDDF;'>
		<thead>
			<tr>
				<td
					style='padding: 20px;font-family: Arial, Helvetica, sans-serif; background-color: #fff; text-align: center; border-radius: 5px; border: 0px solid #ddd;'>
					<img style='width: 200px;'
						src='https://inmobiliariaprofesional.com.co/web_prueba/wp-content/uploads/2025/05/logo.png'
						alt=''>
				</td>
			</tr>
		</thead>
		<tbody style='background-color: #F9FDDF; color: #333; font-family: Arial, Helvetica, sans-serif;'>
			<tr>
				<td style='padding: 20px;font-family: Arial, Helvetica, sans-serif;'>
					<h2><strong>Tipo de solicitud: </strong>" . $tipo_solicitud . "</h2>
					<p
						style='font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: #333; line-height: 1.5;'>
						¡Hola mi nombre es <strong>" . $nombre_completo . "</strong> con número de documento <strong>" . $numero_documento . "</strong>!<br>
						<br>
						" . $mensaje . "
					</p>
					<p
						style='font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: #333; line-height: 1.5;'>
						Se pueden comunicar por medio de <strong>" . $medio_contacto . "</strong>
						<ul>
							<li><strong>Correo electrónico:</strong> " . $correo_electronico . "</li>
							<li><strong>Número de teléfono:</strong> " . $numero_telefono . "</li>
						</ul>
					</p>
                    <small><i>* He leido y acepto la politica de privacidad</i></small>
				</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td
					style='padding: 20px;font-family: Arial, Helvetica, sans-serif; background-color: #0A3334; text-align: center; border-radius: 5px; color: #fff;text-align: center; border-radius: 5px; border: 0px solid #ddd;'>
					<small>Correo Enviado desde la página web de
						<strong>https://inmobiliariaprofesional.com.co/</strong></small>
				</td>
			</tr>
		</tfoot>
	</table>
    ";

    $headers = [
        'Content-Type: text/html; charset=UTF-8',
        'Reply-To: ' . $correo_electronico,
    ];

    $enviado = wp_mail('pqr@inmobiliariaprofesional.com.co', $asunto, $cuerpo, $headers);

    if ($enviado) {
        echo '<div aria-live="polite" aria-atomic="true" style="position: fixed; bottom: 1rem; right: 1rem; z-index: 1080;">
    <div class="toast" id="miToast" data-delay="5000">
        <div class="toast-header">
            <strong class="mr-auto text-success">¡Formulario enviado con éxito!</strong>

            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
        </div>
        <div class="toast-body">
            Te responderemos en el transcurso de un día hábil. Tu solicitud es muy importante para nosotros.
        </div>
    </div>
</div>';
    } else {
        echo '<div aria-live="polite" aria-atomic="true" style="position: fixed; bottom: 1rem; right: 1rem; z-index: 1080;">
    <div class="toast" id="miToast" data-delay="5000">
        <div class="toast-header">
            <strong class="mr-auto text-danger">ERROR: Mensaje NO enviado</strong>

            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
        </div>
        <div class="toast-body">
            Su mensaje no ha sido enviado.
        </div>
    </div>
</div>';
    }
}
?>

<!-- Cabecera -->
<?php get_header(); ?>

<!-- main-area -->
<main>


    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex align-items-center"
        style="background-image:url(<?php echo IMAGES ?>/testimonial/test-bg.png)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title mb-30">
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="breadcrumb-wrap">

                        <?php
                        if (function_exists('yoast_breadcrumb')) {
                            yoast_breadcrumb('<nav aria-label="breadcrumb"><ol class="breadcrumb">', '</ol></nav>');
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- about-area -->
    <?php if (have_rows('grupo_intro')) : ?>
        <?php while (have_rows('grupo_intro')) : the_row(); ?>
            <section id="about" class="about-area about-p pt-100 pb-100 p-relative">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                            <div class=" about-content s-about-content">
                                <?php the_sub_field('texto'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- about-area-end -->

</main>
<!-- main-area-end -->

<!-- Modal Form-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Solicitudes a un clic</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <?php wp_nonce_field('enviar_formulario_custom', 'form_nonce'); ?>
                    <div class="form-row">
                        <div class="col my-2">
                            <input type="text" class="form-control" placeholder="Nombre completo" name="nombre_completo" required>
                        </div>
                        <div class="col my-2">
                            <input type="email" class="form-control" placeholder="Correo electrónico" name="correo_electronico" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col my-2">
                            <input type="text" class="form-control" placeholder="Número de télefono" name="numero_telefono" required>
                        </div>
                        <div class="col my-2">
                            <input type="text" class="form-control" placeholder="Número de documento" name="numero_documento" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col my-2">
                            <select name="tipo_solicitud" id="tipo_solicitud" class="form-control" required>
                                <option value="" disabled selected>Tipo de Solicitud</option>
                                <option value="Tengo problemas al pagar el canon de arrendamiento">Tengo problemas al pagar el canon de arrendamiento</option>
                                <option value="Tengo una novedad con mis servicios públicos (Recuerda hacer este proceso mínimo 5 días antes de la fecha de
                                    vencimiento).">Tengo una novedad con mis servicios públicos (Recuerda hacer este proceso mínimo 5 días antes de la fecha de
                                    vencimiento).</option>
                                <option value="Quiero certificación comercial">Quiero certificación comercial</option>
                                <option value="Tengo novedad en mi facturación">Tengo novedad en mi facturación</option>
                                <option value="Tengo un daño en el inmueble">Tengo un daño en el inmueble
                                </option>
                                <option value="Tengo novedades en el uso de los servicios de la copropiedad">Tengo novedades en el uso de los servicios de la copropiedad
                                </option>
                                <option value="Quiero reportar una asamblea">Quiero reportar una asamblea</option>
                                <option value="Quiero finalizar el contrato">Quiero finalizar el contrato</option>
                                <option value="Otra solicitud">Otra solicitud</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col my-2">
                            <select name="medio_contacto" id="medio_contacto" class="form-control" required>
                                <option value="" disabled selected>Medio de contacto</option>
                                <option value="Llamada">Llamada</option>
                                <option value="Whatsapp">Whatsapp</option>
                                <option value="Correo electrónico">Correo electrónico</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <textarea name="mensaje" class="form-control" id="" cols="30" rows="3"
                                placeholder="Mensaje" required></textarea>
                        </div>
                    </div>
                    <div class="custom-control custom-checkbox my-2">
                        <input name="politica_privacidad" type="checkbox" class="custom-control-input" id="customCheck1" required>
                        <label class="custom-control-label" for="customCheck1">He leido y acepto la politica de
                            privacidad Enlace en el pie de esta pagina</label>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="enviar_formulario" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Modal end -->


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var toast = new bootstrap.Toast(document.getElementById('miToast'));
        toast.show();
    });
</script>

<!-- Footer-- >
<?php get_footer(); ?>