---
title: Aseprite Builder
excerpt: Github Workflow to build Aseprite from the source code and make an installer setup using innosetup.
date: 2026-07-05
slug: aseprite-builder
featured: true
link: https://github.com/sticknologic/Aseprite-Builder
technologies:
  - lua
  - C++
  - Github Workflow
---

A GitHub Actions-based builder that compiles Aseprite into a 64-bit Windows .exe installer using Inno Setup.

This repository lets you generate your own Aseprite installer by providing a source ZIP (from releases) and a version tag—all without setting up anything locally.

> [!WARNING]
> Windows may show a SmartScreen warning when running the installer because it is **not code-signed**.
>
> This is expected for custom-built binaries from GitHub Actions.
>
> To run the installer:
> 1. Click **More info**
> 2. Click **Run anyway**

------
## 🚀 Features
- Build Aseprite (64-bit Windows) automatically
- Uses GitHub Actions (no local setup needed)
- Accepts release ZIP source files
- Outputs a password-protected .exe installer
- Built and packaged with Inno Setup

-----

## 📦 How It Works

The workflow is triggered manually via GitHub Actions (`workflow_dispatch`).

**You provide:**
- ```aseprite_url``` → A ZIP file from the [Aseprite releases page](https://github.com/aseprite/aseprite/releases/latest)
- ```version``` → The version label (used for naming)

**The workflow will:**

1. Download the source ZIP
2. Extract and compile Aseprite
3. Package it into an installer using Inno Setup
4. Protect the installer with a password
5. Upload the .exe as a GitHub artifact

-----

# ▶️ Usage
1. Open Actions
  - Go to the Actions tab in this repository
  - Select the build workflow
2. Run Workflow

Click "Run workflow" and fill in:
```yml
aseprite_url: https://github.com/aseprite/aseprite/archive/refs/tags/v1.3.16.zip
version: 1.3.16
```

-----

## 📥 Output

After the workflow finishes:

- Open the workflow run
- Scroll to Artifacts
- Download the file:
  `aseprite-build`

### File Inclusion:
- the exe file (e.g. `aseprite-v1.3.181`)
- password.txt

-----

## ⚠️ Important Notes
- `aseprite_url` must be a ZIP file from a release, not a repo link
- The password is not static—it changes per build
- This project/repo **does not provide prebuilt binaries**

-----

## 🛠️ Requirements
- A GitHub account
- GitHub Actions enabled in your repository

-----

## 📄 License
This repository is licensed under the [`GNU General Public License v3.0 (GPL-3.0)`](https://github.com/STICKnoLOGIC/Aseprite-Builder/blob/main/LICENSE).

### Components & Their Licenses
- This repository (Aseprite Builder)
  Licensed under GPL-3.0
- Aseprite source code
  Provided by [Igara Studio](https://igara.com/) and [licensed under its own terms](https://www.aseprite.org/terms/).

  ⚠️ Aseprite is not fully open source for free commercial use—you must comply with its license when building and using it.
  Aseprite is licensed separately—please check the [official project for details](https://github.com/aseprite/aseprite).
