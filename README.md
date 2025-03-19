# Meeting Minutes Processor

## Overview
The **Meeting Minutes Processor** script extracts, summarizes, and organizes meeting content from documents into a well-structured PowerPoint presentation. This tool automates the tedious process of documenting meeting summaries, saving time and effort.

---

## Features
- **Document Parsing**: Supports `.docx`, `.pdf`, and `.txt` files for input.
- **Text Summarization**: Automatically generates concise summaries using advanced NLP models.
- **Key Discussion Points**: Identifies the most significant points discussed during the meeting.
- **Action Items & Decisions**: Extracts actionable tasks and decisions made during the meeting.
- **PowerPoint Presentation**: Creates visually clean PowerPoint slides with attendees, summaries, action items, key points, and more.

---

## Prerequisites
Ensure the following Python libraries are installed before running the script:
```bash
pip install python-docx PyPDF2 python-pptx transformers spacy nltk
python -m spacy download en_core_web_sm
