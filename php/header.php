<header>
  <h1><a href="/index.php">Les Sauveteurs</a></h1>
  <nav>
    <ul>
      <li><a href="#">page1</a></li>
      <li><a href="#">page2</a></li>
    </ul>
  </nav>
  <button type="button" name="button" onclick="openForm()"><i class="fas fa-wheelchair"></i></button>
</header>

<div class="loginPopup">
  <div class="formPopup" id="popupForm">
    <form action="index.php" class="formContainer" name="handi">
        <div id="type-handi">
          <label><input type="checkbox" name="park" value="true">Parkinson</label>
          <label><input type="checkbox" name="dalt" value="true">Daltonien</label>
          <label><input type="checkbox" name="dys" value="true">Dyslexique</label>
        </div>
        <div id="reponse">
          <button type="submit" class="btn" id="submit">Valider</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
        </div>
    </form>
  </div>
</div><div class="loginPopup">
  <div class="formPopup" id="popupForm">
    <form action="index.php" class="formContainer" name="handi">
        <div id="type-handi">
          <label><input type="checkbox" name="park" value="true">Parkinson</label>
          <label><input type="checkbox" name="dalt" value="true">Daltonien</label>
          <label><input type="checkbox" name="dys" value="true">Dyslexique</label>
        </div>
        <div id="reponse">
          <button type="submit" class="btn" id="submit">Valider</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
        </div>
    </form>
  </div>
</div>
