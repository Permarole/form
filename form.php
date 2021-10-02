<form action="./return.php" method="post">

  <div>

    <label for="name">Nom :</label>

    <input type="text" id="name" name="user_name">

  </div>

  <div>

    <label for="firstname">Prénom :</label>

    <input type="text" id="firstname" name="user_firstname">

  </div>

  <div>

    <label for="email">Courriel :</label>

    <input type="email" id="courriel" name="user_email">

  </div>

  <div>

    <label for="phone">Telephone :</label>

    <input type="tel" id="phone" name="user_phone">

  </div>

  <div>

    <label for="subject">Sujet :</label>
    <select name="subject" id="subject">
      <option value="service après vente">Service après-vente</option>
      <option value="informations produit">Produit</option>
      <option value="reclamation">Réclamation</option>
    </select>

  </div>

  <div>

    <label for="message">Message :</label>

    <textarea id="message" name="user_message"></textarea>

  </div>

  <div class="button">

    <button type="submit">Envoyer votre message</button>

  </div>

</form>