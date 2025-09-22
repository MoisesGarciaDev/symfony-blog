# symfony-blog
Desenvolvimento de um Blog Interativo com Symfony
## Features

- **User Management**
  - Registration & login system
  - Role-based authentication (ROLE_USER, ROLE_ADMIN)
  - User profiles with personal article management

- **Content Management**
  - Create, edit, delete blog posts
  - Automatic slug generation
  - Post comments system
  - Search functionality by title

- **Technical Features**
  - Bootstrap 5 responsive design
  - Pagination with KnpPaginatorBundle
  - Flash messages for user feedback
  - Form validation with custom messages

##  Installation

1. Clone the repository
2. Install dependencies: `composer install`
3. Configure database in `.env`
4. Run migrations: `php bin/console doctrine:migrations:migrate`
5. Start server: `symfony server:start`

## Dependencies

- Symfony 6.3
- Doctrine ORM
- Bootstrap 5
- KnpPaginatorBundle
- Symfony Security Bundle

## Routes

- `/` - Homepage (redirects to posts)
- `/post` - List all blog posts
- `/register` - User registration
- `/login` - User login
- `/minha-conta` - User profile page

## UI Features

- Responsive Bootstrap design
- Navigation bar with auth-aware links
- Card-based post layout
- Form styling with Bootstrap classes
- Alert messages for user actions

## Development

Project follows Symfony best practices with:
- Repository pattern for data access
- Twig templates with inheritance
- Form components with validation
- Security configuration via YAML
