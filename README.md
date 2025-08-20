# SA-MP Website Template - React TypeScript Version

A modern React TypeScript conversion of the original SA-MP website template, maintaining the same visual design and functionality while using modern web technologies.

## Features

- **Modern React 18** with TypeScript
- **Responsive Design** maintaining original SA-MP aesthetic
- **Client-side Routing** with React Router
- **Component-based Architecture** for easy maintenance
- **Type Safety** with TypeScript
- **Original Assets** preserved (images, fonts, styling)

## Quick Start

### Prerequisites
- Node.js (version 14 or higher)
- npm or yarn

### Installation

1. **Install Dependencies**:
   ```bash
   npm install
   ```

2. **Start Development Server**:
   ```bash
   npm start
   ```

3. **Open Browser**:
   Navigate to `http://localhost:3000`

### Build for Production

```bash
npm run build
```

## Project Structure

```
src/
├── components/          # Reusable components
│   └── Layout.tsx      # Main layout with navigation
├── pages/              # Page components
│   ├── Home.tsx        # Home page
│   ├── Login.tsx       # Login/UCP page
│   └── Forum.tsx       # Forum page
├── config/             # Configuration files
│   └── settings.ts     # Server settings and config
├── App.tsx             # Main app component
├── App.css             # Main styles
└── index.tsx           # Entry point
```

## Configuration

Edit `src/config/settings.ts` to customize:

- Server name
- Owner information
- Server IP
- Database settings (for future backend integration)
- API endpoints

## Backend Integration

This React frontend is designed to work with a backend API. To integrate:

1. **Update API endpoints** in `src/config/settings.ts`
2. **Implement authentication** in `src/pages/Login.tsx`
3. **Add API calls** for user data and statistics
4. **Set up CORS** on your backend server

## Original Features Preserved

- ✅ Original visual design and styling
- ✅ Navigation tabs with hover effects
- ✅ Login form with validation
- ✅ Server information display
- ✅ All original images and assets
- ✅ Custom font (pricedown.ttf)

## Deployment

### Option 1: Static Hosting (Netlify, Vercel, GitHub Pages)
```bash
npm run build
# Upload the 'build' folder to your hosting provider
```

### Option 2: Traditional Web Server
```bash
npm run build
# Copy the 'build' folder to your web server's public directory
```

### Option 3: Docker
```dockerfile
FROM node:16-alpine
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build
EXPOSE 3000
CMD ["npm", "start"]
```

## Development

### Available Scripts

- `npm start` - Start development server
- `npm run build` - Build for production
- `npm test` - Run tests
- `npm run eject` - Eject from Create React App

### Adding New Pages

1. Create a new component in `src/pages/`
2. Add the route in `src/App.tsx`
3. Add navigation link in `src/components/Layout.tsx`

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## License

This project maintains the same license as the original SA-MP template.

## Support

For issues and questions, please refer to the original SA-MP template documentation or create an issue in this repository.

---

**Note**: This is a frontend-only conversion. Backend functionality (database, authentication, etc.) needs to be implemented separately or integrated with an existing SA-MP server backend.
