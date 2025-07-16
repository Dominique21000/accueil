<?php
from fpdf import FPDF

# Create a PDF document
pdf = FPDF()
pdf.add_page()
pdf.set_font("Arial", size=12)

# Title
pdf.set_font("Arial", 'B', 16)
pdf.cell(200, 10, txt="La Dépression", ln=True, align="C")
pdf.ln(10)

# Content
pdf.set_font("Arial", size=12)
content = [
    "La dépression est un trouble mental courant qui se caractérise par une humeur persistante de tristesse, une perte d'intérêt pour les activités habituellement appréciées, et une incapacité à accomplir les activités quotidiennes, pendant au moins deux semaines. Elle peut affecter les pensées, les comportements, les sentiments et le bien-être physique d'une personne.",
    "",
    "Voici quelques symptômes courants de la dépression :",
    "",
    "1. Sentiments persistants de tristesse ou de vide : Se sentir triste, anxieux ou \"vide\" presque toute la journée, presque tous les jours.",
    "2. Perte d'intérêt ou de plaisir : Diminution marquée de l'intérêt ou du plaisir pour toutes, ou presque toutes, les activités la plupart du temps.",
    "3. Fatigue ou manque d'énergie : Se sentir fatigué presque tous les jours.",
    "4. Sentiments de culpabilité ou d'inutilité : Sentiments excessifs ou inappropriés de culpabilité, d'inutilité ou d'impuissance.",
    "5. Difficultés de concentration : Diminution de la capacité à penser, à se concentrer ou à prendre des décisions.",
    "6. Changements d'appétit ou de poids : Perte ou gain de poids significatif sans régime, ou diminution ou augmentation de l'appétit.",
    "7. Troubles du sommeil : Insomnie ou hypersomnie presque tous les jours.",
    "8. Agitation ou ralentissement psychomoteur : Être agité ou ralentir dans ses mouvements ou ses pensées.",
    "9. Pensées de mort ou de suicide : Pensées récurrentes de mort, idées suicidaires récurrentes sans plan spécifique, ou tentative de suicide.",
    "",
    "Pour savoir si vous êtes en dépression, il est important de consulter un professionnel de santé mentale, comme un psychologue ou un psychiatre. Ils peuvent évaluer vos symptômes, poser un diagnostic et recommander un traitement approprié. Les traitements peuvent inclure la thérapie, les médicaments, ou une combinaison des deux.",
    "",
    "Si vous ou quelqu'un que vous connaissez présentez des symptômes de dépression, il est crucial de chercher de l'aide professionnelle. La dépression est une condition traitable, et beaucoup de gens trouvent un soulagement avec le bon soutien."
]

for line in content:
    pdf.multi_cell(0, 10, txt=line)

# Save the PDF
pdf_file_path = "depression_info.pdf"
pdf.output(pdf_file_path)

print(f"PDF saved as {pdf_file_path}")

