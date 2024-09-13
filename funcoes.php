<?php

/**
 * TimeZone
 * Retorna o fuso horario local
 * que definira a hora e a data
 */
function timeZone(){
    date_default_timezone_set("America/Recife");
}
/**
 * DataAtual
 * Retorna a data atualizada
 */
function dataAtual(){
    return date("d/m/Y"); 
}
/**
 * horaAtual
 * Retorna a hora atualizada
 */
function horaAtual(){
    return date("h:i:sa");
}

/**
 * @param $texto
 * É o texto que será manupulado
 * Retorna Texto maiúsculo
 */
function textoMaiusculo($texto){
    if($texto){
        return strtoupper($texto);
    }
}
/**
 * @param $texto
 * É o texto que será manupulado
 * @param  $tipo
 * É o Número que indica o tipo de 
 * manipulação da string
 * Tipos:
 * 1 - Quantidade de caracters de um texto
 * 2 - Quantidade de palavras de um texto
 * 3 - Busca Posição da palavra na string
 */
function contar($texto, $tipo){
    if($texto && $tipo === 1){
        return strlen($texto);
    }
    if($texto && $tipo === 2){
        return str_word_count($texto);
    }
    if($texto && $tipo === 3){
        return strpos($texto, "Diogo");
    }
    return false;
}

/**
 * ReduzirStr
 * Reduzir o tamanho de um texto
 * @param $str que representa o texto a ser reduzido
 * @param $quantidade que reprenta quantos caracters vão ser exibidos
 */
function reduzirStr($str,$quantidade){
    $tamanho = strlen($str);
    if($str && $tamanho >= $quantidade){
      return substr($str,0,$quantidade)." [...]";
    }
  }

  /**
   * CriarLista
   * Popula as informações exibidas na tela principal
   */
  function criarLista(){
      $listaNoticia[0] = array(
          "titulo" => "BOXE",
          "descricao" => "O boxe é um esporte de combate que envolve o uso dos punhos para atacar e se defender. Tem origens antigas, remontando a civilizações como os sumérios e egípcios, mas sua forma moderna se desenvolveu no século XVIII na Inglaterra. O esporte se popularizou ao redor do mundo e é caracterizado pela sua combinação de técnica, força física, estratégia e condicionamento. Os competidores, chamados de pugilistas ou boxeadores, enfrentam-se em um ringue dividido em quadrados e delimitado por cordas. As lutas são divididas em rounds, com duração específica, e são supervisionadas por um árbitro. O objetivo é acertar o oponente com golpes limpos e válidos, enquanto se esquiva e se defende dos ataques recebidos. O boxe moderno é categorizado em diversas classes de peso, desde pesos mosca até pesos pesados, o que permite a participação de atletas de diferentes estaturas e pesos. Existem organizações internacionais que regulamentam o esporte e promovem campeonatos de prestígio, como a Associação Mundial de Boxe (WBA), o Conselho Mundial de Boxe (WBC) e a Federação Internacional de Boxe (IBF). Além da competição profissional, o boxe também é praticado como forma de exercício físico, defesa pessoal e disciplina mental. Muitos academias e clubes oferecem aulas para iniciantes, visando não apenas o condicionamento físico, mas também o desenvolvimento da autoconfiança e disciplina. Apesar de sua popularidade, o boxe também é um esporte controverso devido aos riscos associados às lesões cerebrais traumáticas decorrentes dos golpes na cabeça. Essa preocupação levou a diversas medidas de segurança e regulamentações para proteger a saúde dos atletas, como exames médicos rigorosos e regras específicas sobre golpes permitidos. Em resumo, o boxe é um esporte emocionante e desafiador que exige habilidade técnica, condicionamento físico e coragem dos seus praticantes. Ao longo dos anos, tem sido uma fonte de inspiração para muitos e continua a ser um dos esportes mais assistidos e praticados em todo o mundo.",
          "imagem" => "./imagens/boxe.jpg",
          "href" => ""
      );
      $listaNoticia[1] = array(
          "titulo" => "BOXE",
          "descricao" => "O boxe é um esporte de combate que envolve o uso dos punhos para atacar e se defender. Tem origens antigas, remontando a civilizações como os sumérios e egípcios, mas sua forma moderna se desenvolveu no século XVIII na Inglaterra. O esporte se popularizou ao redor do mundo e é caracterizado pela sua combinação de técnica, força física, estratégia e condicionamento. Os competidores, chamados de pugilistas ou boxeadores, enfrentam-se em um ringue dividido em quadrados e delimitado por cordas. As lutas são divididas em rounds, com duração específica, e são supervisionadas por um árbitro. O objetivo é acertar o oponente com golpes limpos e válidos, enquanto se esquiva e se defende dos ataques recebidos. O boxe moderno é categorizado em diversas classes de peso, desde pesos mosca até pesos pesados, o que permite a participação de atletas de diferentes estaturas e pesos. Existem organizações internacionais que regulamentam o esporte e promovem campeonatos de prestígio, como a Associação Mundial de Boxe (WBA), o Conselho Mundial de Boxe (WBC) e a Federação Internacional de Boxe (IBF). Além da competição profissional, o boxe também é praticado como forma de exercício físico, defesa pessoal e disciplina mental. Muitos academias e clubes oferecem aulas para iniciantes, visando não apenas o condicionamento físico, mas também o desenvolvimento da autoconfiança e disciplina. Apesar de sua popularidade, o boxe também é um esporte controverso devido aos riscos associados às lesões cerebrais traumáticas decorrentes dos golpes na cabeça. Essa preocupação levou a diversas medidas de segurança e regulamentações para proteger a saúde dos atletas, como exames médicos rigorosos e regras específicas sobre golpes permitidos. Em resumo, o boxe é um esporte emocionante e desafiador que exige habilidade técnica, condicionamento físico e coragem dos seus praticantes. Ao longo dos anos, tem sido uma fonte de inspiração para muitos e continua a ser um dos esportes mais assistidos e praticados em todo o mundo.",
          "imagem" => "./imagens/boxe.jpg",
          "href" => ""
      );
      $listaNoticia[2] = array(
          "titulo" => "BOXE",
          "descricao" => "O boxe é um esporte de combate que envolve o uso dos punhos para atacar e se defender. Tem origens antigas, remontando a civilizações como os sumérios e egípcios, mas sua forma moderna se desenvolveu no século XVIII na Inglaterra. O esporte se popularizou ao redor do mundo e é caracterizado pela sua combinação de técnica, força física, estratégia e condicionamento. Os competidores, chamados de pugilistas ou boxeadores, enfrentam-se em um ringue dividido em quadrados e delimitado por cordas. As lutas são divididas em rounds, com duração específica, e são supervisionadas por um árbitro. O objetivo é acertar o oponente com golpes limpos e válidos, enquanto se esquiva e se defende dos ataques recebidos. O boxe moderno é categorizado em diversas classes de peso, desde pesos mosca até pesos pesados, o que permite a participação de atletas de diferentes estaturas e pesos. Existem organizações internacionais que regulamentam o esporte e promovem campeonatos de prestígio, como a Associação Mundial de Boxe (WBA), o Conselho Mundial de Boxe (WBC) e a Federação Internacional de Boxe (IBF). Além da competição profissional, o boxe também é praticado como forma de exercício físico, defesa pessoal e disciplina mental. Muitos academias e clubes oferecem aulas para iniciantes, visando não apenas o condicionamento físico, mas também o desenvolvimento da autoconfiança e disciplina. Apesar de sua popularidade, o boxe também é um esporte controverso devido aos riscos associados às lesões cerebrais traumáticas decorrentes dos golpes na cabeça. Essa preocupação levou a diversas medidas de segurança e regulamentações para proteger a saúde dos atletas, como exames médicos rigorosos e regras específicas sobre golpes permitidos. Em resumo, o boxe é um esporte emocionante e desafiador que exige habilidade técnica, condicionamento físico e coragem dos seus praticantes. Ao longo dos anos, tem sido uma fonte de inspiração para muitos e continua a ser um dos esportes mais assistidos e praticados em todo o mundo.",
          "imagem" => "./imagens/boxe.jpg",
          "href" => ""
      );
      $listaNoticia[3] = array(
          "titulo" => "BOXE",
          "descricao" => "O boxe é um esporte de combate que envolve o uso dos punhos para atacar e se defender. Tem origens antigas, remontando a civilizações como os sumérios e egípcios, mas sua forma moderna se desenvolveu no século XVIII na Inglaterra. O esporte se popularizou ao redor do mundo e é caracterizado pela sua combinação de técnica, força física, estratégia e condicionamento. Os competidores, chamados de pugilistas ou boxeadores, enfrentam-se em um ringue dividido em quadrados e delimitado por cordas. As lutas são divididas em rounds, com duração específica, e são supervisionadas por um árbitro. O objetivo é acertar o oponente com golpes limpos e válidos, enquanto se esquiva e se defende dos ataques recebidos. O boxe moderno é categorizado em diversas classes de peso, desde pesos mosca até pesos pesados, o que permite a participação de atletas de diferentes estaturas e pesos. Existem organizações internacionais que regulamentam o esporte e promovem campeonatos de prestígio, como a Associação Mundial de Boxe (WBA), o Conselho Mundial de Boxe (WBC) e a Federação Internacional de Boxe (IBF). Além da competição profissional, o boxe também é praticado como forma de exercício físico, defesa pessoal e disciplina mental. Muitos academias e clubes oferecem aulas para iniciantes, visando não apenas o condicionamento físico, mas também o desenvolvimento da autoconfiança e disciplina. Apesar de sua popularidade, o boxe também é um esporte controverso devido aos riscos associados às lesões cerebrais traumáticas decorrentes dos golpes na cabeça. Essa preocupação levou a diversas medidas de segurança e regulamentações para proteger a saúde dos atletas, como exames médicos rigorosos e regras específicas sobre golpes permitidos. Em resumo, o boxe é um esporte emocionante e desafiador que exige habilidade técnica, condicionamento físico e coragem dos seus praticantes. Ao longo dos anos, tem sido uma fonte de inspiração para muitos e continua a ser um dos esportes mais assistidos e praticados em todo o mundo.",
          "imagem" => "./imagens/boxe.jpg",
          "href" => ""
      );
      $listaNoticia[4] = array(
          "titulo" => "BOXE",
          "descricao" => "O boxe é um esporte de combate que envolve o uso dos punhos para atacar e se defender. Tem origens antigas, remontando a civilizações como os sumérios e egípcios, mas sua forma moderna se desenvolveu no século XVIII na Inglaterra. O esporte se popularizou ao redor do mundo e é caracterizado pela sua combinação de técnica, força física, estratégia e condicionamento. Os competidores, chamados de pugilistas ou boxeadores, enfrentam-se em um ringue dividido em quadrados e delimitado por cordas. As lutas são divididas em rounds, com duração específica, e são supervisionadas por um árbitro. O objetivo é acertar o oponente com golpes limpos e válidos, enquanto se esquiva e se defende dos ataques recebidos. O boxe moderno é categorizado em diversas classes de peso, desde pesos mosca até pesos pesados, o que permite a participação de atletas de diferentes estaturas e pesos. Existem organizações internacionais que regulamentam o esporte e promovem campeonatos de prestígio, como a Associação Mundial de Boxe (WBA), o Conselho Mundial de Boxe (WBC) e a Federação Internacional de Boxe (IBF). Além da competição profissional, o boxe também é praticado como forma de exercício físico, defesa pessoal e disciplina mental. Muitos academias e clubes oferecem aulas para iniciantes, visando não apenas o condicionamento físico, mas também o desenvolvimento da autoconfiança e disciplina. Apesar de sua popularidade, o boxe também é um esporte controverso devido aos riscos associados às lesões cerebrais traumáticas decorrentes dos golpes na cabeça. Essa preocupação levou a diversas medidas de segurança e regulamentações para proteger a saúde dos atletas, como exames médicos rigorosos e regras específicas sobre golpes permitidos. Em resumo, o boxe é um esporte emocionante e desafiador que exige habilidade técnica, condicionamento físico e coragem dos seus praticantes. Ao longo dos anos, tem sido uma fonte de inspiração para muitos e continua a ser um dos esportes mais assistidos e praticados em todo o mundo.",
          "imagem" => "./imagens/boxe.jpg",
          "href" => ""
      );
      return $listaNoticia;
  }