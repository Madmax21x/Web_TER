<!DOCTYPE html>
<html lang="fr" dir="ltr">

<!-- Modal -->
<div class="modal own-modal" id="modal_to_open">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title" style="text-align: center;">Contactez-nous!</p>
      <button class="delete" aria-label="close" id="close_modal"></button>
    </header>
    <section class="modal-card-body">
      <!-- Content ... -->
      <center>
      <div class="block" style="display:inline-block; left: 30%; margin: auto; width: 100%;">
        <footer class="footer">
          <div class="field is-horizontal">
            <div class="field-body">
              <div class="field">
                <p class="control is-expanded has-icons-left">
                  <input class="input" type="text" placeholder="Nom" name="name">
                  <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                  </span>
                </p>
              </div>
            </div>
          </div>

          <div class="field is-horizontal">
            <div class="field-body">
              <div class="field">
                <p class="control is-expanded has-icons-left">
                  <input class="input" type="text" placeholder="Prénom" name="firstname">
                  <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                  </span>
                </p>
              </div>
            </div>
          </div>

          <div class="field is-horizontal">
            <div class="field-body">
              <div class="field">
                <p class="control is-expanded has-icons-left has-icons-right">
                  <input class="input is-success" type="email" placeholder="Email" value="a@gmail.com" name="email">
                  <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                  </span>
                  <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                  </span>
                </p>
              </div>
            </div>
          </div>

          <div class="field is-horizontal">
            <div class="field-body">
              <div class="field is-expanded">
                <div class="field has-addons">
                  <p class="control">
                    <a class="button is-static">+33</a>
                  </p>
                  <p class="control is-expanded">
                    <input class="input" type="tel" placeholder="Numéro de téléphone" name="number">
                  </p>
                </div>
                <p class="help">Ne pas entrer le premier 0</p>
              </div>
            </div>
          </div>

          <div class="field is-horizontal">
            <div class="field-label is-normal">
              <label class="label">Sujet</label>
            </div>
            <div class="field-body">
              <div class="field">
                <div class="control">
                  <input class="input is-danger" type="text" name="subject">
                </div>
                <p class="help is-danger">
                  Ce champ est indispensable
                </p>
              </div>
            </div>
          </div>

          <div class="field is-horizontal">
            <div class="field-label is-normal">
              <label class="label">Question</label>
            </div>
            <div class="field-body">
              <div class="field">
                <div class="control">
                  <textarea class="textarea" placeholder="Expliquez comment on peut vous aider" name="message"></textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="field is-horizontal">
            <div class="field-label">
              <!-- Left empty for spacing -->
            </div>
            <div class="field-body">
              <div class="field">
                <div class="control">
                  <button class="button is-primary" id="send_email">
                    Envoyer un message
                  </button>
                </div>
              </div>
            </div>
          </div>
            <br/>
            <br/>
    </section>
  </div>
</div>
<!-- Modal -->
