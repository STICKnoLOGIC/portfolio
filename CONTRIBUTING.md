# Contributing to STICKnoLOGIC's Portfolio

Thank you for considering contributing to this portfolio! We welcome contributions of all kinds, whether they're bug reports, feature suggestions, documentation improvements, or code contributions.

## Code of Conduct

We are committed to providing a welcoming and inclusive environment for all contributors. Please be respectful and constructive in all interactions.

## How to Contribute

### Reporting Bugs

If you encounter a bug, please create an issue with:

- A clear, descriptive title
- A detailed description of the issue
- Steps to reproduce the bug
- Expected behavior vs. actual behavior
- Screenshots or error messages (if applicable)
- Your environment (OS, PHP version, Node version, etc.)

### Suggesting Features

We love feature suggestions! Please create an issue with:

- A clear title describing the feature
- A detailed description of the proposed feature
- Use cases and examples
- Any relevant screenshots or mockups

### Improving Documentation

Documentation improvements are always welcome:

- Fix typos or unclear explanations
- Add missing information
- Improve code examples
- Enhance README or guides

Simply create a pull request with your changes.

### Contributing Code

#### Getting Started

1. **Fork the repository**
   ```bash
   git clone https://github.com/YOUR-USERNAME/portfolio.git
   cd portfolio
   ```

2. **Create a feature branch**
   ```bash
   git checkout -b feature/your-feature-name
   # or
   git checkout -b fix/bug-description
   ```

3. **Install dependencies**
   ```bash
   cd portfolio
   composer install
   npm install
   ```

4. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   
   ⚠️ **Important:** Check `.env.example` and configure any custom environment variables required for this project before proceeding.

#### Development Workflow

1. **Make your changes** following the code style guidelines below

2. **Test your changes**
   ```bash
   composer test
   npm run build
   ```

3. **Format your code**
   ```bash
   composer pint
   ```

4. **Commit with clear messages**
   ```bash
   git commit -m "Add feature: description of what you added"
   ```

5. **Push to your fork**
   ```bash
   git push origin feature/your-feature-name
   ```

6. **Create a Pull Request**
   - Provide a clear description of the changes
   - Reference any related issues
   - Explain the rationale behind the changes

## Code Style Guidelines

### PHP/Laravel

- Follow PSR-12 coding standards (enforced by Laravel Pint)
- Use meaningful variable and function names
- Add PHPDoc comments for classes and public methods
- Keep methods focused and single-responsibility
- Write tests for new functionality

### JavaScript/Vue

- Use consistent formatting and indentation (2 spaces)
- Use meaningful variable names
- Add comments for complex logic
- Keep components small and reusable

### CSS/Tailwind

- Use Tailwind utility classes
- Avoid custom CSS when possible
- Use responsive prefixes consistently
- Follow mobile-first approach

### Markdown/Content

- Use proper Markdown syntax
- Include YAML front matter for content files
- Use clear headings and structure
- Add examples where helpful

## Pull Request Process

1. **Update documentation** if your changes require it

2. **Add tests** for new functionality

3. **Ensure all tests pass**
   ```bash
   composer test
   ```

4. **Run code formatting**
   ```bash
   composer pint
   ```

5. **Make sure your branch is up to date**
   ```bash
   git fetch upstream
   git rebase upstream/main
   ```

6. **Keep commits atomic** - Each commit should represent one logical change

7. **Write clear commit messages** - Use present tense ("Add feature" not "Added feature")

## Pull Request Template

```markdown
## Description
Brief description of the changes

## Type of Change
- [ ] Bug fix
- [ ] New feature
- [ ] Documentation update
- [ ] Performance improvement

## Related Issues
Closes #(issue number)

## Testing
Describe the testing you've done

## Screenshots (if applicable)
Add screenshots for UI changes

## Checklist
- [ ] Tests pass locally
- [ ] Code is formatted with Pint
- [ ] Documentation is updated
- [ ] Commit messages are clear
```

## Adding Content

To add new portfolio content:

1. Create a new markdown file in the appropriate `content/` subdirectory
2. Include YAML front matter with required fields:
   ```yaml
   ---
   title: "Your Title"
   slug: "unique-slug"
   date: "YYYY-MM-DD"
   description: "Brief description"
   ---
   ```

3. Write your content in Markdown
4. Test locally with `npm run dev`
5. Create a pull request with your content

## File Organization

- Keep changes focused - don't mix unrelated changes in one PR
- Use clear file names and directory structure
- Don't commit sensitive information (.env files, secrets, etc.)

## Performance Considerations

- Optimize images and assets
- Avoid unnecessary dependencies
- Consider load time impact
- Test on various connection speeds

## Security

- Don't commit sensitive data
- Validate user input
- Follow Laravel security best practices
- Report security issues privately to the maintainer

## Questions?

Feel free to open an issue for any questions or contact the maintainer directly.

## Attribution

Contributors will be recognized in the project. Thank you for helping improve this portfolio!

## License

By contributing, you agree that your contributions will be licensed under the MIT license.

---

**Thank you for contributing! Your efforts help make this project better for everyone.** 🎉
