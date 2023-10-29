@extends('site.layouts.basico')

@section('conteudo')

<div class="topo"> <div class="logo"> <img src=" {{ asset('img/logo.png') }}"> </div>
    <div class="menu">
        <ul> <li><a href="{{ route('site.index') }}">Principal</a></li> <li><a href="{{ route('site.sobrenos') }}">Sobre
            Nós</a></li> <li><a href="{{ route('site.painel') }}">Painel de Pesquisa</a></li>
            </ul>
    </div>
    </div> <div class="direita"> <div class="contato"> <h1>Pesquisa de Satisfação.</h1> <p>Sua opinião faz a
    diferença! Participe da nossa pesquisa online agora.
    <p>
        <form>
        <input type="text" placeholder="Nome" class="borda-branca">
        <hr>
        <input type="text" placeholder="Telefone" class="borda-branca">
        <hr>
        <input type="text" placeholder="Número da NF" class="borda-branca">
        <hr>
        <select class="borda-branca">
            <option value="">Em qual setor podemos melhorar ? </option>
            <option value="">Vendas</option>
            <option value="">Caixa</option>
            <option value="">Estqoue</option>
            <option value="">Entrega</option>
        </select>
        <hr>
        <input class="borda-branca" type="text" placeholder="Preencha aqui em que você acha que podemos melhorar">

        <button type="submit" class="borda-branca">Enviar</button>


        </form>



</div>




</div>

<div class="esquerda">
    <div class="contato">
        <h1>Acesso ao Sistema</h1>
        <form>
            <select class="borda-branca">
                <option value="">Unidade</option>
                <option value="">Caratinga</option>
                <option value="">Inhapim</option>
                <option value="">Ipatinga</option>
                <option value="">Piedade de Caratinga</option>
            </select>
            <hr>
            <input type="text" placeholder="Login" class="borda-branca" id="id">
            <hr>
            <input type="password" placeholder="Senha" class="borda-branca" id="senha">
            <hr>
            <button type="submit" class="borda-branca" id="entrar">Entrar</button>

        </form>

    <h3 class="link"><a href="https://www.exemplo.com">Cadastre-se Agora</a></h3>


    </div>
</div>

@endsection