<?php
    namespace App\src\arquivo01;

    use App\src\arquivo01\UsuarioInterface;

    class Administrador implements UsuarioInterface {
        protected $nome;
        protected $login;
        protected $senha;
    
        public function autenticar(string $login, string $senha): bool {
            return true;
        }
    
        public function autorizar(): array {
            return ['gerenciar_usuarios', 'gerenciar_cursos'];
        }
    }