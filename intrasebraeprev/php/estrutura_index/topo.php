<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php //include "location.php"; ?>
<div class="bar-topo hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <test>Seja bem vindo(a),
                    <span> <?php  echo $_SESSION['nome']?></span></test>
                        <div class="drop-cog">
                            <img class="cog"src="<?php echo $home_url;?>/imagens/cog.png" alt="">
                            <ul>
                                <li> <a href="<?php echo $home_url;?>/index.php?settings=<?php echo base64_encode('true'); ?>">Configurações</a> </li>
                                <?php
                                    $select = mysql_query("SELECT permissao FROM permissoesNivelAcesso WHERE nivel_acesso='".$_SESSION['nivel_acesso']."'",$conexao) or die (mysql_error());
                                    $f=0;
                                    $s=0;
                                    while($consulta=mysql_fetch_array($select)) {
                                        if($consulta['permissao']=='forum') {
                                            $f++; 
                                        }
                                        if($consulta['permissao']=='sistema') {
                                            $s++;
                                        }
                                    }
                                    /*if ($f==1) :
                                        <li>
                                            <a href='<?php echo $home_url;?>/index.php?forum=<?php echo base64_encode("true");?>'>
                                            Fórum
                                            </a> 
                                        </li>
                                    
                                    <?php endif; */
                                    if ($s==1):?>
                                        <li> 
                                            <a href="<?php echo $home_url;?>/sistema/sistema.php">
                                            Gerenciador de Conteúdo
                                        </a>
                                        </li>
                                    <?php endif; ?>
                                <li> <a href="<?php echo $home_url;?>/index.php">Intranet</a> </li>
                                <li> <a href="<?php echo $home_url;?>/php/sair.php">Sair</a> </li>
                            </ul>
                        </div>
                        <form method="get" action="index.php">
                            <img class="lupa" src="<?php echo $home_url;?>/imagens/lupa.png" alt="">
                            <input type="text" name="pesq" class="search">
                            <input type="submit" value="Pesquisar" class="btnPesq" hidden>
                            <input type="hidden" name="arq">
                        </form>               
            </div>
        </div>
    </div>
</div>
<div class="bar-mobile hidden-md hidden-lg">
    <div class="btn-mobile">
        <div></div>
        <div></div>
        <div></div>
    </div> 
    <div class="name">
        <img class="conf"src="<?php echo $home_url;?>/imagens/confmobile.png" alt="">
        Bem vindo:<span> <?php  echo $_SESSION['nome']?></span></div>
</div>
<ul class="conf-menu hidden-md hidden-lg">
    <li> <img class="x-icon"src="<?php echo $home_url;?>/imagens/xicon.png" alt=""></li>
    <li> <a href="<?php echo $home_url;?>/index.php?settings=<?php echo base64_encode('true'); ?>">Configurações</a> </li>
    <?php
        $select = mysql_query("SELECT permissao FROM permissoesNivelAcesso WHERE nivel_acesso='".$_SESSION['nivel_acesso']."'",$conexao) or die (mysql_error());
        $f=0;
        $s=0;
        while($consulta=mysql_fetch_array($select)) {
            if($consulta['permissao']=='forum') {
                $f++; 
            }
            if($consulta['permissao']=='sistema') {
                $s++;
            }
        }
        /*if ($f==1) :?>
            <li>
                <a href='<?php echo $home_url;?>/index.php?forum=<?php echo base64_encode("true");?>'>
                Fórum
                </a> 
            </li>
        
        <?php endif; */
        if ($s==1):?>
            <li> 
                <a href="<?php echo $home_url;?>/sistema/sistema.php">
                Gerenciador de Conteúdo
            </a>
            </li>
        <?php endif; ?>
    <li> <a href="<?php echo $home_url;?>/index.php">Intranet</a> </li>
    <li> <a href="<?php echo $home_url;?>/php/sair.php">Sair</a> </li>
</ul>

