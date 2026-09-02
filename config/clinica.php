<?php
/**
 * Configuração do site - Clínica Odontológica Modelo
 * Edite AQUI todos os dados e textos. O HTML (index.php) não precisa mudar.
 */
return [
  // ====== Identidade ======
  'name'    => 'Dr(a). Nome Sobrenome',
  'short'   => 'Dr(a). Nome Sobrenome',
  'tagline' => 'Odontologia · Cidade Exemplo',
  'logo'    => 'img/logo.svg',

  // ====== Contato ======
  'phone'           => '(00) 00000-0000',
  'phone_raw'       => '+5500000000000',
  'whatsapp_numero' => '5500000000000',
  'whatsapp_msg'    => 'Olá, Dr(a). Nome Sobrenome! Vim pelo site e gostaria de agendar uma consulta.',

  // ====== Endereço ======
  'address'    => 'Rua Exemplo, 000 · Sala 00',
  'city'       => 'Cidade Exemplo',
  'state'   => 'UF',
  'maps_query' => 'Rua Exemplo, 000, Cidade Exemplo · UF',
  'geo_lat'    => 0,
  'geo_lng'    => 0,

  // ====== Avaliações ======
  'rating'     => '5,0',
  'rating_num' => 5.0,
  'reviews'    => 4,

  // ====== Horário ======
  'horario_semana' => 'Seg a Sex: 08h às 18h',
  'horario_sabado' => 'Sábado: sob agendamento',

  // ====== Redes sociais ======
  'instagram' => '',

  // ====== SEO ======
  'seo_title' => 'Dr(a). Nome Sobrenome - Dentista em Cidade Exemplo | Odontologia',
  'seo_desc'  => 'Clínica Odontológica Modelo em Cidade Exemplo. Atendimento humanizado, tecnologia atualizada e tratamentos personalizados: clareamento, facetas, implantes, ortodontia e mais. Nota 5,0. Agende pelo WhatsApp.',

  // ====== Hero ======
  'hero_titulo_1'  => 'Seu sorriso merece um atendimento',
  'hero_titulo_2'  => 'de excelência.',
  'hero_subtitulo' => 'Tratamentos odontológicos modernos com atendimento humanizado, tecnologia e cuidado em cada detalhe.',

  // ====== Diferenciais (cards) ======
  'diferenciais' => [
    ['icon' => 'heart-handshake', 'title' => 'Atendimento Humanizado', 'desc' => 'Escuta atenta e acolhimento em cada etapa, do primeiro contato ao resultado final.'],
    ['icon' => 'sofa',            'title' => 'Ambiente Acolhedor',     'desc' => 'Espaço confortável e tranquilo, pensado para reduzir a ansiedade da sua visita.'],
    ['icon' => 'microscope',      'title' => 'Tecnologia Atualizada',  'desc' => 'Equipamentos modernos para diagnósticos precisos e tratamentos mais seguros.'],
    ['icon' => 'sparkles',        'title' => 'Tratamentos Personalizados', 'desc' => 'Cada plano é desenhado sob medida para as suas necessidades e objetivos.'],
    ['icon' => 'shield-check',    'title' => 'Excelência no Atendimento', 'desc' => 'Compromisso com a qualidade, ética e transparência em todos os procedimentos.'],
    ['icon' => 'map-pin',         'title' => 'Localização de Fácil Acesso', 'desc' => 'No Edifício Exemplo, em Cidade Exemplo, com estrutura completa para recebê-lo.'],
  ],

  // ====== Tratamentos ======
  'servicos' => [
    ['icon' => 'smile',      'title' => 'Clareamento Dental',    'desc' => 'Dentes visivelmente mais brancos com protocolo seguro e resultado natural.'],
    ['icon' => 'sparkles',   'title' => 'Limpeza',               'desc' => 'Profilaxia completa que remove placa e tártaro, prevenindo cáries e gengivite.'],
    ['icon' => 'gem',        'title' => 'Facetas',               'desc' => 'Design de sorriso sob medida para harmonia, brilho e naturalidade do rosto.'],
    ['icon' => 'anchor',     'title' => 'Implantes',             'desc' => 'Reposição de dentes com estética natural e mastigação totalmente recuperada.'],
    ['icon' => 'layers',     'title' => 'Próteses',              'desc' => 'Próteses fixas e removíveis planejadas para conforto, função e naturalidade.'],
    ['icon' => 'align-horizontal-distribute-center', 'title' => 'Ortodontia', 'desc' => 'Aparelhos convencionais, estéticos e alinhadores para um sorriso alinhado.'],
    ['icon' => 'stethoscope','title' => 'Canal',                 'desc' => 'Endodontia com anestesia eficaz e alívio da dor, preservando o seu dente.'],
    ['icon' => 'scissors',   'title' => 'Extrações',             'desc' => 'Cirurgias seguras, incluindo sisos, com recuperação rápida e acompanhada.'],
    ['icon' => 'star',       'title' => 'Odontologia Estética',  'desc' => 'Procedimentos que valorizam o seu sorriso e a harmonia natural da face.'],
  ],

  // ====== Como funciona ======
  'passos' => [
    ['n' => '01', 'title' => 'Entre em contato',    'desc' => 'Chame no WhatsApp e tire suas dúvidas. Respondemos de forma rápida e atenciosa.'],
    ['n' => '02', 'title' => 'Agende sua consulta',  'desc' => 'Escolha o melhor dia e horário. Fazemos uma avaliação cuidadosa do seu caso.'],
    ['n' => '03', 'title' => 'Receba um atendimento personalizado', 'desc' => 'Tratamento conduzido com técnica e acolhimento, com acompanhamento até o resultado.'],
  ],

  // ====== Galeria (placeholders editáveis) ======
  'galeria' => [
    ['img' => 'img/galeria-consultorio.svg',  'alt' => 'Consultório odontológico da Dr(a). Nome Sobrenome'],
    ['img' => 'img/galeria-recepcao.svg',     'alt' => 'Recepção acolhedora do consultório'],
    ['img' => 'img/galeria-equipamentos.svg', 'alt' => 'Equipamentos odontológicos modernos'],
    ['img' => 'img/galeria-atendimento.svg',  'alt' => 'Atendimento humanizado ao paciente'],
    ['img' => 'img/galeria-sorriso-1.svg',    'alt' => 'Paciente sorrindo após o tratamento'],
    ['img' => 'img/galeria-sorriso-2.svg',    'alt' => 'Sorriso saudável e confiante'],
  ],

  // ====== Depoimentos ======
  'depoimentos' => [
    ['name' => 'Juliana Menezes', 'role' => 'Clareamento e limpeza', 'initials' => 'JM', 'text' => 'Tinha muito receio de ir ao dentista e saí de lá tranquila. A Dr(a). Nome Sobrenome explicou cada passo e o resultado do clareamento ficou lindo e natural.'],
    ['name' => 'Ricardo Andrade', 'role' => 'Implante',              'initials' => 'RA', 'text' => 'Perdi um dente da frente e achei que nunca mais sorriria igual. O implante ficou idêntico aos outros. Atendimento pontual e impecável.'],
    ['name' => 'Camila Torres',   'role' => 'Facetas',               'initials' => 'CT', 'text' => 'As facetas transformaram completamente o meu sorriso. Ficou tudo muito natural, exatamente como eu sonhava. Recomendo de olhos fechados.'],
    ['name' => 'Marcos Vinícius', 'role' => 'Ortodontia',            'initials' => 'MV', 'text' => 'Profissional atenciosa e muito cuidadosa. Cada consulta foi no horário marcado e sempre me senti seguro durante todo o tratamento.'],
    ['name' => 'Patrícia Lima',   'role' => 'Odontologia estética',  'initials' => 'PL', 'text' => 'Ambiente acolhedor e um atendimento humano de verdade. Me senti à vontade em todas as etapas. Virei paciente fiel da Dr(a). Nome Sobrenome.'],
  ],

  // ====== Sobre a profissional ======
  'sobre_titulo' => 'Dedicação, ética e cuidado com cada sorriso',
  'sobre_p1' => 'A Dr(a). Nome Sobrenome une técnica apurada e um atendimento verdadeiramente humanizado. Cada paciente é ouvido com atenção e recebe um plano de tratamento individualizado - nada de procedimentos desnecessários, apenas o que faz sentido para a sua saúde e o seu sorriso.',
  'sobre_p2' => 'Com foco em qualidade, ética e aperfeiçoamento constante, o consultório investe em tecnologia moderna e em protocolos de segurança em todas as etapas. O resultado é uma experiência confortável, transparente e com acompanhamento do começo ao fim.',
  'sobre_stats' => [
    ['v' => '5,0★', 'l' => 'nota dos pacientes'],
    ['v' => '100%', 'l' => 'atendimento personalizado'],
    ['v' => '∞',    'l' => 'cuidado em cada detalhe'],
  ],

  // ====== CTA final ======
  'cta_titulo' => 'Agende sua consulta e cuide do seu sorriso.',
  'cta_sub'    => 'Dê o primeiro passo para um sorriso mais saudável e bonito com um atendimento de excelência.',
];
