<?php

    use Illuminate\Database\Seeder;
    use App\SocialSecurity;

    class SocialSecurityTableSeeder extends Seeder
    {

        public function run()
        {
            //Cajas de compensación familiar ccf
            SocialSecurity::create(['business_name' => 'Cajas de Compensacion familiar', 'tradename' => 'Cajas de Compensacion familiar', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar Camacol COMFAMILIAR CAMACOL', 'tradename' => 'Caja de Compensacion Familiar Camacol COMFAMILIAR CAMACOL', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar COMFENALCO ANTIOQUIA', 'tradename' => 'Caja de Compensacion Familiar COMFENALCO ANTIOQUIA', 'type' => 'ccf']);
            /*SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar de Antioquia COMFAMA', 'tradename' => 'Caja de Compensacion Familiar de Antioquia COMFAMA', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensación Familiar CAJACOPI BARRANQUILLA', 'tradename' => 'Caja de Compensación Familiar CAJACOPI BARRANQUILLA', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar de Barranquilla COMBARRANQUILLA', 'tradename' => 'Caja de Compensacion Familiar de Barranquilla COMBARRANQUILLA', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensación Familiar COMFAMILIAR DEL ATLANTICO', 'tradename' => 'Caja de Compensación Familiar COMFAMILIAR DEL ATLANTICO', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar de Fenalco - Andi COMFENALCO CARTAGENA', 'tradename' => 'Caja de Compensacion Familiar de Fenalco - Andi COMFENALCO CARTAGENA', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar de Cartagena y Bolivar Comfamiliar', 'tradename' => 'Caja de Compensacion Familiar de Cartagena y Bolivar Comfamiliar', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar de Boyacá - COMFABOY', 'tradename' => 'Caja de Compensacion Familiar de Boyacá - COMFABOY', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar de Caldas COMFAMILIARES', 'tradename' => 'Caja de Compensacion Familiar de Caldas COMFAMILIARES', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar del Caquetá - COMFACA', 'tradename' => 'Caja de Compensacion Familiar del Caquetá - COMFACA', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar del Cauca - COMFACAUCA', 'tradename' => 'Caja de Compensacion Familiar del Cauca - COMFACAUCA', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar del Cesar COMFACESAR', 'tradename' => 'Caja de Compensacion Familiar del Cesar COMFACESAR', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar de Córdoba COMFACOR', 'tradename' => 'Caja de Compensacion Familiar de Córdoba COMFACOR', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar CAFAM', 'tradename' => 'Caja de Compensacion Familiar CAFAM', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja Colombiana de Subsidio Familiar COLSUBSIDIO', 'tradename' => 'Caja Colombiana de Subsidio Familiar COLSUBSIDIO', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar COMPENSAR', 'tradename' => 'Caja de Compensacion Familiar COMPENSAR', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar de Cundinamarca - COMFACUNDI', 'tradename' => 'Caja de Compensacion Familiar de Cundinamarca - COMFACUNDI', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar del Choco', 'tradename' => 'Caja de Compensacion Familiar del Choco', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar de la Guajira - COMFAGUAJIRA', 'tradename' => 'Caja de Compensacion Familiar de la Guajira - COMFAGUAJIRA', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar del Huila - COMFAMILIAR', 'tradename' => 'Caja de Compensacion Familiar del Huila - COMFAMILIAR', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar del Magdalena', 'tradename' => 'Caja de Compensacion Familiar del Magdalena', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar Regional del Meta COFREM', 'tradename' => 'Caja de Compensacion Familiar Regional del Meta COFREM', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar de Nariño', 'tradename' => 'Caja de Compensacion Familiar de Nariño', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar del Oriente Colombiano COMFAORIENTE', 'tradename' => 'Caja de Compensacion Familiar del Oriente Colombiano COMFAORIENTE', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar del Norte de Santander COMFANORTE', 'tradename' => 'Caja de Compensacion Familiar del Norte de Santander COMFANORTE', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar de Barrancabermeja CAFABA', 'tradename' => 'Caja de Compensacion Familiar de Barrancabermeja CAFABA', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja Santandereana de Subsidio Familiar CAJASAN', 'tradename' => 'Caja Santandereana de Subsidio Familiar CAJASAN', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar COMFENALCO SANTANDER', 'tradename' => 'Caja de Compensacion Familiar COMFENALCO SANTANDER', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar de Sucre', 'tradename' => 'Caja de Compensacion Familiar de Sucre', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar de Fenalco COMFENALCO QUINDIO', 'tradename' => 'Caja de Compensacion Familiar de Fenalco COMFENALCO QUINDIO', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar de Risaralda- COMFAMILIAR RISARALDA', 'tradename' => 'Caja de Compensacion Familiar de Risaralda- COMFAMILIAR RISARALDA', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar del Sur del Tolima CAFASUR', 'tradename' => 'Caja de Compensacion Familiar del Sur del Tolima CAFASUR', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar del Tolima COMFATOLIMA', 'tradename' => 'Caja de Compensacion Familiar del Tolima COMFATOLIMA', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar de Fenalco del Tolima - COMFENALCO', 'tradename' => 'Caja de Compensacion Familiar de Fenalco del Tolima - COMFENALCO', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar del Valle del Cauca - COMFENALCO VALLE', 'tradename' => 'Caja de Compensacion Familiar del Valle del Cauca - COMFENALCO VALLE', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar del Valle del Cauca COMFAMILIAR ANDI - COMFANDI', 'tradename' => 'Caja de Compensacion Familiar del Valle del Cauca COMFAMILIAR ANDI - COMFANDI', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar del Putumayo - COMFAMILIAR PUTUMAYO', 'tradename' => 'Caja de Compensacion Familiar del Putumayo - COMFAMILIAR PUTUMAYO', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensación Familiar de San Andrés y Providencia Islas CAJASAI', 'tradename' => 'Caja de Compensación Familiar de San Andrés y Providencia Islas CAJASAI', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar del Amazonas CAFAMAZ', 'tradename' => 'Caja de Compensacion Familiar del Amazonas CAFAMAZ', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar de Arauca COMFIAR', 'tradename' => 'Caja de Compensacion Familiar de Arauca COMFIAR', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar Campesina COMCAJA', 'tradename' => 'Caja de Compensacion Familiar Campesina COMCAJA', 'type' => 'ccf']);
            SocialSecurity::create(['business_name' => 'Caja de Compensacion Familiar del Casanare - COMFACASANARE', 'tradename' => 'Caja de Compensacion Familiar del Casanare - COMFACASANARE', 'type' => 'ccf']);

            //Administradora del fondo de pensiones afp
            SocialSecurity::create(['business_name' => 'SSS ADMINISTRADORA DE FONDOS DE PENSIONES Y CESANTIAS PORVENIR S.A.', 'tradename' => 'SSS ADMINISTRADORA DE FONDOS DE PENSIONES Y CESANTIAS PORVENIR S.A.', 'nit' => '8002248088', 'phone' => '', 'type' => 'afp']);
            SocialSecurity::create(['business_name' => 'SSS PROTECCION FONDO DE PENSIONES OBLIGATORIAS', 'tradename' => 'SSS PROTECCION FONDO DE PENSIONES OBLIGATORIAS', 'nit' => '8002297390', 'phone' => '(051)2302666', 'type' => 'afp']);
            SocialSecurity::create(['business_name' => 'SSS FONDO DE PENSIONES OBLIGATORIAS COLFONDOS', 'tradename' => 'SSS FONDO DE PENSIONES OBLIGATORIAS COLFONDOS', 'nit' => '8002279406', 'phone' => '3766616', 'type' => 'afp']);
            SocialSecurity::create(['business_name' => 'administradora colombiana de pensiones - COLPENSIONES', 'tradename' => 'administradora colombiana de pensiones - COLPENSIONES', 'nit' => '900,336,004-7', 'phone' => '4890909', 'type' => 'afp']);
            SocialSecurity::create(['business_name' => 'OLD MUTUAL-ADMINISTRADORA DE FONDO DE PENSIONES Y CESANTIAS S.A.', 'tradename' => 'OLD MUTUAL-ADMINISTRADORA DE FONDO DE PENSIONES Y CESANTIAS S.A.', 'nit' => '800,148,514-2', 'phone' => '6205566-6209555', 'type' => 'afp']);

            //Administradora de riesgos laraborales arp
            SocialSecurity::create(['business_name' => 'SSS COLMENA SEGUROS RIESGOS PROFESIONALES S.A.', 'tradename' => 'SSS COLMENA SEGUROS RIESGOS PROFESIONALES S.A.', 'nit' => '8002261753', 'address' => 'Avenida El Dorado No. 69C - 03 Piso 5', 'phone' => '071-3241111', 'type' => 'arp']);
            SocialSecurity::create(['business_name' => 'SSS SEGUROS DE VIDA AXA COLPATRIA S.A.', 'tradename' => 'SSS SEGUROS DE VIDA AXA COLPATRIA S.A.', 'nit' => '8600021839', 'address' => 'Carrera 7 No. 24 - 89 ', 'phone' => '071 - 336 46 77', 'type' => 'arp']);
            SocialSecurity::create(['business_name' => 'SSS COMPAÑÍA DE SEGUROS BOLIVAR S.A.', 'tradename' => 'SSS COMPAÑÍA DE SEGUROS BOLIVAR S.A.', 'nit' => '8600025032', 'address' => 'Carrera 10 No. 16 - 39 ', 'phone' => '071 - 341 00 77', 'type' => 'arp']);
            SocialSecurity::create(['business_name' => 'SSS COMPAÑÍA DE SEGUROS DE VIDA AURORA S.A.', 'tradename' => 'SSS COMPAÑÍA DE SEGUROS DE VIDA AURORA S.A.', 'nit' => '8600221375', 'address' => 'Carrera 7 No. 74 - 21 Piso 1', 'phone' => '071 - 212 74 06', 'type' => 'arp']);
            SocialSecurity::create(['business_name' => 'POSITIVA COMPAÑÍA DE SEGUROS', 'tradename' => 'POSITIVA COMPAÑÍA DE SEGUROS', 'nit' => '8600111536', 'address' => 'Carrera 7 No. 26 - 20 Piso 5', 'phone' => '071 - 232 46 73 ', 'type' => 'arp']);
            SocialSecurity::create(['business_name' => 'SSS SEGUROS DE VIDA ALFA S.A.', 'tradename' => 'SSS SEGUROS DE VIDA ALFA S.A.', 'nit' => '8605036173', 'address' => 'Carrera 13 No. 27 - 47 Piso 22  Y 23', 'phone' => '071 - 287 59 11', 'type' => 'arp']);
            SocialSecurity::create(['business_name' => 'SSS LIBERTY SEGUROS DE VIDA S.A.', 'tradename' => 'SSS LIBERTY SEGUROS DE VIDA S.A.', 'nit' => '8600086457', 'address' => 'Calle 71 A No. 6 - 30 Piso 14', 'phone' => '071 - 346 20 79', 'type' => 'arp']);
            SocialSecurity::create(['business_name' => 'SEGUROS DE VIDA SURAMERICANA SA', 'tradename' => 'SEGUROS DE VIDA SURAMERICANA SA', 'nit' => '8002561619', 'address' => 'Carrera 50 No. 52 - 50 Piso 10 Club Unión', 'phone' => '074 - 511 35 45', 'type' => 'arp']);
            SocialSecurity::create(['business_name' => 'SSS LA EQUIDAD SEGUROS DE VIDA', 'tradename' => 'SSS LA EQUIDAD SEGUROS DE VIDA', 'nit' => '8300086861', 'address' => 'Calle 19 No. 6 - 68 Piso 11', 'phone' => '071 - 284 19 00', 'type' => 'arp']);
            SocialSecurity::create(['business_name' => 'MAFRE COLOMBIA VIDA SEGUROS SA', 'tradename' => 'MAFRE COLOMBIA VIDA SEGUROS SA', 'nit' => '830,054,904-6', 'address' => 'KRA 14 No 96-34', 'phone' => '6503300', 'type' => 'arp']);

            //Entidad Prestadora de Salud eps
            SocialSecurity::create(['business_name' => 'CAJA DE COMPENSACIÓN FAMILIAR DE CARTAGENA Y BOLÍVAR COMFAMILIAR ', 'tradename' => 'Comfamiliar Caratagena EPS', 'nit' => '890480110', 'image' => 'comfamiliar _aratagena_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'CAJA DE COMPENSACIÓN FAMILIAR DE BOYACÁ “COMFABOY”liquidacion ', 'tradename' => 'Comfaboy EPS', 'nit' => '891800213', 'image' => 'comfaboy_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'CAJA DE COMPENSACIÓN FAMILIAR DE CÓRDOBA “COMFACOR”', 'tradename' => 'Comfacor EPS', 'nit' => '891080005', 'image' => 'comfacor_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'CAJA DE COMPENSACIÓN FAMILIAR DE LA GUAJIRA "COMFAGUAJIRA"', 'tradename' => 'Comfaguajira EPS', 'nit' => '892115006', 'image' => 'comfaguajira_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'CAJA DE COMPENSACIÓN FAMILIAR DEL HUILA “COMFAMILIAR HUILA”', 'tradename' => 'Comfamiliar HUILA EPS', 'nit' => '891180008', 'image' => 'comfamiliar_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'CAJA DE COMPENSACIÓN FAMILIAR DE NARIÑO', 'tradename' => 'Comfanariño EPS', 'nit' => '891280008', 'image' => 'comfanariño_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'CAJA DE COMPENSACIÓN FAMILIAR DE CUNDINAMARCA "COMFACUNDI"', 'tradename' => 'Comfacundi EPS', 'nit' => '860045904', 'image' => 'comfacundi_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'CAJA DE COMPENSACIÓN FAMILIAR CAJACOPI ATLÁNTICO', 'tradename' => 'Cajacopi Atlantico EPS', 'nit' => '890102044', 'image' => 'cajacopi_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'CAJA DE COMPENSACIÓN FAMILIAR DEL CHOCÓ', 'tradename' => 'Comfachocó EPS', 'nit' => '891600091', 'image' => 'comfachocó_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'CAJA DE COMPENSACIÓN FAMILIAR DE SUCRE', 'tradename' => 'Comfasucre EPS', 'nit' => '892200015', 'image' => 'comfasucre_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'CAJA DE PREVISIÓN SOCIAL DE CASANARE - CAPRESOCA E.P.S.', 'tradename' => 'Capresoca EPS', 'nit' => '891856000', 'image' => 'capresoca_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'CAJA DE COMPENSACIÓN FAMILIAR DEL ORIENTE COLOMBIANO “COMFAORIENTE”', 'tradename' => 'Comfaoriente EPS', 'nit' => '890500675', 'image' => 'comfaoriente_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'ASOCIACION DE CABILDOS INDIGENAS DEL CESAR Y LA GUAJIRA "DUSAKAWI EPSI"', 'tradename' => 'Dusakawi EPS', 'nit' => '824001398', 'image' => 'dusakawi_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'ASOCIACIÓN INDÍGENA DEL CAUCA  A.I.C. EPSI', 'tradename' => 'Asociación Indígena del Cauca EPSI', 'nit' => '817001773', 'image' => 'asociación_epsi.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'EMPRESA PROMOTORA DE SALUD INDÍGENA ANAS WAYUU EPSI', 'tradename' => 'Anas Wayuu EPSI', 'nit' => '839000495', 'image' => 'anas_epsi.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'ENTIDAD PROMOTORA DE SALUD MALLAMAS EPSI', 'tradename' => 'Mallamás EPS', 'nit' => '837000084', 'image' => 'mallamás_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'PIJAOS SALUD EPSI', 'tradename' => 'Pijao Salud EPSI', 'nit' => '809008362', 'image' => 'pijao_epsi.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'EMPRESA MUTUAL PARA EL DESARROLLO INTEGRAL DE LA SALUD E.S.S "EMDISALUD E.S.S EPS-S"', 'tradename' => 'Emdisalud EPS', 'nit' => '811004055', 'image' => 'emdisalud_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'COOPERATIVA EMPRESA SOLIDARIA DE SALUD Y DESARROLLO INTEGRAL “COOSALUD E.S.S.” ENTIDAD PROMOTORA DEL RÉGIMEN SUBSIDIADO EPS-S', 'tradename' => 'Coosalud EPS', 'nit' => '800249241', 'image' => 'coosalud_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'ASOCIACIÓN MUTUAL LA ESPERANZA “ASMET SALUD E.S.S EPS S', 'tradename' => 'Asmet Salud  EPS', 'nit' => '817000248', 'image' => 'asmet_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'ASOCIACIÓN MUTUAL BARRIOS UNIDOS DE QUIBDÓ AMBUQ EPS-S ESS', 'tradename' => 'Barrios Unidos de Quibdó EPS', 'nit' => '818000140', 'image' => 'barrios_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'ENTIDAD COOPERATIVA SOLIDARIA DE SALUD ECOOPSOS ESS EPS-S', 'tradename' => 'Ecoopsos EPS', 'nit' => '832000760', 'image' => 'ecoopsos_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'ASOCIACIÓN MUTUAL EMPRESA SOLIDARIA DE SALUD EMSSANAR E.S.S', 'tradename' => 'Emssanar EPS', 'nit' => '814000337', 'image' => 'emssanar_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'COOPERATIVA DE SALUD COMUNITARIA EMPRESA PROMOTORA DE SALUD SUBSIDIADA  "COMPARTA EPS-S"', 'tradename' => 'Comparta EPS', 'nit' => '804002105', 'image' => 'comparta_eps.jpg', 'type' => 'eps']);
            /*SocialSecurity::create(['business_name' => 'ASOCIACIÓN MUTUAL SER EMPRESA SOLIDARIA DE SALUD ESS', 'tradename' => 'Mutual SER', 'nit' => '806008394', 'image' => 'mutual_ser.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'MEDIMAS EPS', 'tradename' => 'Medimás EPS', 'nit' => '901097473', 'image' => 'medimás_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'SALUDVIDA E.P.S. S.A.', 'tradename' => 'Salid Vida EPS', 'nit' => '830074184', 'image' => 'salid_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'CAPITAL SALUD ENTIDAD PROMOTORA DE SALUD DEL RÉGIMEN SUBSIDIADO SAS "CAPITAL SALUD EPS S SAS"', 'tradename' => 'Capital Salud ', 'nit' => '900298372', 'image' => 'capital_salud.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'SAVIA SALUD - ALIANZA MEDELLIN ANTIOQUIA EPS S.A.S.', 'tradename' => 'Savia Salud EPS', 'nit' => '900604350', 'image' => 'savia_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'ENTIDAD PROMOTORA DE SALUD DEL REGIMEN SUBSIDIADO EPS CONVIDA', 'tradename' => 'Convida EPS', 'nit' => '899999107', 'image' => 'convida_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'NUEVA EMPRESA PROMOTORA DE SALUD S.A. SIGLA NUEVA EPS S.A.', 'tradename' => 'Nueva EPS', 'nit' => '900156264', 'image' => 'nueva_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'SALUD TOTAL ENTIDAD PROMOTORA DE SALUD  DEL RÉGIMEN CONTRIBUTIVO Y DEL RÉGIMEN SUBSIDIADO S.A. PODRA UTILIZAR LA SIGLA SALUD TOTAL EPS-S S.A. ', 'tradename' => 'Salud Total EPS', 'nit' => '800130907', 'image' => 'salud_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'ENTIDAD PROMOTORA DE SALUD SANITAS  S.A.
E.P.S. SANITAS  S.A. ', 'tradename' => 'Sanitas EPS', 'nit' => '800251440', 'image' => 'sanitas_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'EPS Y MEDICINA PREPAGADA SURAMERICANA S.A.', 'tradename' => 'Sura Eps', 'nit' => '800088702', 'image' => 'sura_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'COOMEVA ENTIDAD PROMOTORA DE SALUD S.A.
COOMEVA   E.P.S.  S.A.', 'tradename' => 'Coomeva EPS', 'nit' => '805000427', 'image' => 'coomeva_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'FAMISANAR  LTDA.  CAFAM - COLSUBSIDIO E.P.S.', 'tradename' => 'Famisanar EPS', 'nit' => '830003564', 'image' => 'famisanar_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'ENTIDAD PROMOTORA DE SALUD SERVICIO OCCIDENTAL DE SALUD  S.A. S.O.S.', 'tradename' => 'SOS EPS', 'nit' => '805001157', 'image' => 'sos_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'CRUZ  BLANCA  ENTIDAD PROMOTORA DE SALUD S.A', 'tradename' => 'Cruz  Blanca EPS', 'nit' => '830009783', 'image' => 'cruz_eps.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'CAJA DE COMPENSACION FAMILIAR COMPENSAR', 'tradename' => 'COMPENSAR', 'nit' => '860066942', 'image' => 'compensar_compensar.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'CAJA DE COMPENSACION FAMILIAR DEL VALLE DEL CAUCA', 'tradename' => 'COMFENALCO VALLE', 'nit' => '890303093', 'image' => 'comfenalco_valle.jpg', 'type' => 'eps']);
            SocialSecurity::create(['business_name' => 'ALIANSALUD ENTIDAD PROMOTORA DE SALUD SA', 'tradename' => 'ALIANSALUD EPS', 'nit' => '830113831', 'image' => 'aliansalud_eps.jpg', 'type' => 'eps']);*/
        }
    }
