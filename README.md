
# Meeting Minutes Processor
## Overview:
The Meeting Minutes Processor script extracts, summarizes, and organizes meeting content 
from documents into a well-structured PowerPoint presentation. 
This tool automates the tedious process of documenting meeting summaries, saving time and effort.

## Features:
- Document Parsing: Supports .docx, .pdf, and .txt files for input.
- Text Summarization: Automatically generates concise summaries using advanced NLP models.
- Key Discussion Points: Identifies the most significant points discussed during the meeting.
- Action Items & Decisions: Extracts actionable tasks and decisions made during the meeting.
- PowerPoint Presentation: Creates visually clean PowerPoint slides with attendees, summaries, 
  action items, key points, and more.



# Prerequisites Section: Make sure to install the following libraries:
  pip install python-docx PyPDF2 python-pptx transformers spacy nltk
  python -m spacy download en_core_web_sm


# How It Works:
## 1. Document Parsing:
   - Extracts text from the input document (.docx, .pdf, or .txt).

## 2. Natural Language Processing:
   - Identifies attendees, agendas, discussions, decisions, and action items.
   - Uses the TF-IDF technique to extract key points.
   - Employs the transformers library for generating summaries.

## 3. Presentation Generation:
   - Compiles all extracted information into slides.
   - Each slide contains structured and concise content, optimized for readability.




# Code Structure:
## Main Components:
- `parse_document()`: Reads and extracts text based on the file format.
- `extract_meeting_minutes()`: Structures the document into meeting sections.
- `extract_key_points()`: Identifies critical discussion points using TF-IDF.
- `generate_summary()`: Summarizes long texts using a transformer-based model.
- `create_presentation()`: Generates PowerPoint slides from structured data.

## Processing Workflow:
1. Input a meeting document using `process_meeting_document(file_path, output_path)`.
2. Extract attendees, discussions, key points, and more.
3. Generate a PowerPoint summarizing the meeting in a clean format.


## Input Format:
The script accepts the following input formats:
- Word Documents (.docx)
- PDF Files (.pdf)
- Text Files (.txt)

## Sample Input File:
Attendees: John Doe, Jane Smith
Agenda: Discuss Q1 goals and milestones
Discussion: The team agreed to focus on...
Decisions: Approved hiring for...
Action Items: John will prepare...

## Output:
The script generates a PowerPoint presentation (.pptx) saved to the specified output path, 
containing:
1. Title Slide (Meeting Title & Date)
2. Attendees
3. Summary
4. Key Discussion Points
5. Decisions Made
6. Action Items

## Usage:
1. Save the script as `script.py` or convert your notebook accordingly.
2. Run the script using the following command:
   python script.py <input_file_path> <output_presentation_path>

## Example Command:
python script.py /path/to/meeting_transcript.txt /path/to/output_presentation.pptx

## Outputs:
- PowerPoint Saved To: /path/to/output_presentation.pptx
- Console Logs:
  - Displays the extracted summary.
  - Shows the key discussion points.
  - Lists all action items.

## Known Limitations:
- Content exceeding slide limits is automatically split across multiple slides.
- Long documents are divided into smaller chunks for summarization.
- Requires well-structured headings (e.g., Agenda, Discussion) for accurate extraction.

## Extending the Script:
Consider extending this script by:
- Adding support for additional document formats.
- Customizing slide designs, fonts, and layouts.
- Experimenting with other summarization models or techniques.


print("Meeting Minutes Processor documentation converted into a script!")
