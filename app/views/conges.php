
    <?php if ($other[0]===01) {
      echo "ERREURE:le nombre de jour restant pour votre employe est insuffisante";
    }?>


    <h1> Genration de congé :</h1><br/>
    <form method="post" action='?p=conge'><br/>
      <select name="nomemploye">
        <?php
        foreach ($array as $nom)
        {
          ?>
          <option> <?= $nom ?> </option>
          <?php
        }
        ?>


      </select>
      <input type="text" name="datebegin" placeholder="dd/mm/yy"><br/>
      <input type="text" name="datend"  placeholder="dd/mm/yy"><br/>
      <select name="type"><br/>
        <option> conge maladie</option>
        <option>conge maternite</option>
        <option>congeautre</option>
        <option>congeautre</option>
      </select>
      <button type="submit">generer</button>
    </form>
