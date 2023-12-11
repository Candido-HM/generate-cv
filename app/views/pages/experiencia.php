<?php 
    require_once APP . '../views/inc/header.php';
?>
            <div class="h-100 col-10 overflow-auto">
                <header class="col-12 d-flex justify-content-center  mt-3 mb-3" style="height: 60px;">
                    <h2 class="p-1">Experiencia</h2>
                </header>
                <article class="col-12 p-3 d-flex justify-content-center" style="height: 1000px;">
                    <section class="w-100 shadow-lg border border-secondary-subtle rounded p-2">
                    Voy hacer la seccion principal(Voy a contener las distintas secciones)
                        <!-- Button trigger modal -->
                        <button type="button" id="edit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Experiencia</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Message:</label>
                                                <textarea class="form-control" id="message-text"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>  
                </article>
                <footer class="col-12" style="height: 50px;">
                    Posiblemente le agregue un footer (Haber que show)
                </footer> 
            </div>
<?php
    require_once APP . '/views/inc/footer.php';
?>