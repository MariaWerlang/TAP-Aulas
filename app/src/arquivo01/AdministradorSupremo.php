<?php 
    namespace App\src\arquivo01;

    use App\src\arquivo01\Administrador;
    
    class AdministradorSupremo extends Administrador {
        public function autorizar(): array {
            $autorizacoes = parent::autorizar();
            $autorizacoes[] = 'configurar_sistema';
            $autorizacoes[] = 'gerenciar_backups';
            return $autorizacoes;
        }
    }