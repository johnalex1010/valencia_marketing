<?php /*Template Name: Página de Contacto*/ ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['enviar_formulario'])) {
    if (!isset($_POST['form_nonce']) || !wp_verify_nonce($_POST['form_nonce'], 'enviar_formulario_custom')) {
        wp_die('Error de seguridad');
    }

    $nombre  = sanitize_text_field($_POST['nombre']);
    $correo  = sanitize_email($_POST['correo']);
    $asunto  = sanitize_text_field($_POST['asunto']);
    $mensaje = sanitize_textarea_field($_POST['mensaje']);

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
					<p
						style='font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: #333; line-height: 1.5;'>
						¡Hola mi nombre es <strong>" . $nombre . "</strong>!<br>
						<br>
						" . $mensaje . "
					</p>
					<p
						style='font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: #333; line-height: 1.5;'>
						Se pueden comunicar al correo electrónico <strong>" . $correo . "</strong>.
					</p>
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

    <!-- contact-area -->
    <section id="contact" class="contact-area contact-bg pt-100 pb-100 p-relative fix">

        <div class="container">


            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="section-title mb-60">
                        <h2>Dejanos tus datos</h2>
                    </div>
                    <form action="#" class="contact-form" method="POST">
                        <?php wp_nonce_field('enviar_formulario_custom', 'form_nonce'); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-name mb-20">
                                    <input type="text" placeholder="John Doe" name="nombre" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-email mb-20">
                                    <input type="mail" placeholder="mail@mail.com " name="correo" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-tel mb-20">
                                    <input type="text" placeholder="Número celular" name="telefono" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-subject mb-20">
                                    <input type="text" placeholder="Asunto del mensaje" name="asunto" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-message mb-45">
                                    <textarea name="mensaje" id="message" cols="30" rows="10" placeholder="Mensaje" required></textarea>
                                </div>
                                <div class="">
                                    <button type="submit" name="enviar_formulario" class="btn btn-primary rounded" data-animation="fadeInRight"
                                        data-delay=".8s">Enviar mensaje</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <style>
                    .content-contacto ul li {
                        display: flex;
                        align-items: center;
                        gap: 20px;
                        margin-bottom: 10px;
                    }

                    .content-contacto ul li i {
                        background-color: #f9fddf;
                        border-radius: 50px;
                        height: 50px;
                        width: 50px;
                        text-align: center;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        /* flex: 1; */
                    }

                    .content-contacto ul li span {
                        flex: 1;
                        word-break: break-all;
                    }
                </style>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="content-contacto">
                        <?php if (have_rows('grupo_contacto')) : ?>
                            <?php while (have_rows('grupo_contacto')) : the_row(); ?>
                                <?php the_sub_field('texto_contacto'); ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- contact-area-end -->


</main>
<!-- main-area-end -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var toast = new bootstrap.Toast(document.getElementById('miToast'));
        toast.show();
    });
</script>

<!-- Footer -->
<?php get_footer(); ?>